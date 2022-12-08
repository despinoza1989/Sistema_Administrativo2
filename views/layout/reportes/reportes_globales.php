<div class="card-body" style="margin: 2em 2em;" align="center">
    <div class="col-md-10" class="card">
        <div class="card border-secondary mb-3">
            <div class="card-header text-center">
            </div>
            <div class="card-body">
                <iframe title="Reportes no mas accidentes Globales" width="1280" height="1024"
                    src="https://app.powerbi.com/view?r=eyJrIjoiYWJjZmUyMjktOWM1OC00NDlhLTg5Y2EtOGRiZTgxZGUyN2QxIiwidCI6IjcyZmQwYjVhLThhNmEtNGNmZi04OWY2LWJkZTk2MWY3ZTI1MCIsImMiOjR9&pageName=ReportSection8d37594882ee86871883"
                    frameborder="0" allowFullScreen="true"></iframe>
            </div>
        </div>
    </div>
    <div class="" align="center">
        <button class="btn btn-primary col-10" onclick="openManualAdministrativo()">Descargar PDF</button>
    </div>
</div>

<script>
init()

function openManualAdministrativo() {

    window.open(
        'http://localhost/sistema_administrativo/assents/reportes/ReportesnomasaccidentesGlobales.pdf');

}


function openManualProfesional() {

    window.open('http://localhost/sistema_administrativo/assents/manual/ManualFerme.pdf');

}
</script>