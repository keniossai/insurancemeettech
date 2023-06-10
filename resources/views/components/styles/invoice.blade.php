<style>

    body {
        background-color: #525659;
    }

    @media print {
        body {
            background-color: #fff;
        }

        .btn {
            display: none;
        }

        #sheet {
            background-color: transparent;
        }
    }

    @page {

        @bottom-right {
            content: "counter(page)";
        }

        @bottom-left {
            content: "counter(page)";
        }
    }

    #sheet {
        width: 900px;
        margin: 2em auto;
        background-color: #fff;
        padding: 2em;
    }

    p {
        font-size: 14px;
    }

    table {
        font-size: 14px;
        color: #000;
        background: #eaebec;
        margin: auto;
        border-top: 1px solid #ccc;
        border-right: 1px solid #ccc;
        width: 100%;
    }

    table th {
        padding: 5px;
        border-bottom: 1px solid #ccc;
        border-left: 1px solid #ccc;

        background: #ededed;
        text-transform: uppercase;
    }

    table td {
        padding: 10px;
        border-bottom: 1px solid #ccc;
        border-left: 1px solid #ccc;

        background: #fff;
    }

    table.hidden {
        background: none;
        border: none;
        margin: auto;
    }

    table.hidden td {
        background: none;
        border: none;
        margin: auto;
    }

    h1, h2, h3, h4, .uppercase {
        text-transform: uppercase;
    }
</style>
