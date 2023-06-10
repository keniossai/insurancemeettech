<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RegistrationExport implements FromQuery, Responsable, WithMapping, WithHeadings
{
    use Exportable;

    protected $fileName = 'RegistrationExport.csv';

    public function __construct(public Request $request)
    {
        //
    }


    /**
    * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return User::with(['category', 'enrol', 'branch'])
            ->whereHas('payments', fn ($query) => $query->paid())
            ->when($this->request->filled('virtual'),
                fn ($query) => $query->whereVirtual($this->request->virtual)
            )->latest('registered_at');
    }


    public function map($user): array
    {
        return [
            $user->category->name,
            $user->title,
            $user->full_name,
            $user->gender,
            $user->enrol?->scn,
            $user->phone,
            $user->email,
            $user->organization,
            $user->branch?->name,
            $user->reg_number,
            $user->isAttendingVirtually() ? 'Virtual' : 'In-Person',
            $user->isAttendingWithAToddler() ? 'Yes' : 'No',
            $user->isOver70Years() ? 'Yes' : 'No',
            $user->meta->disability ?? '--',
            $user->registered_at->toDayDateTimeString(),
        ];
    }


    public function headings(): array
    {
        return [
            'Category',
            'Title',
            'Full Name',
            'Gender',
            'SCN',
            'Phone',
            'Email',
            'Organization',
            'Branch',
            'Reg Number',
            'Attendee Type',
            'Attending With Toddler',
            'Over 70 Years Old',
            'Disability',
            'Registered At',
        ];
    }
}
