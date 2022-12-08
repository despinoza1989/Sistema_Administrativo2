<div class="card-body" style="margin: 2em 2em;" align="center">
    <div class="col-md-10" class="card">
        <div class="card border-secondary mb-3">
            <div class="card-header text-center">
            </div>
            <div class="card-body">
                <div class="ratio ratio-16x9">
                    <iframe title="Reportes no mas accidentes Clientes"
                        src="https://app.powerbi.com/view?r=eyJrIjoiMmNiMjhmMzAtZmNmYy00MTk5LTlmMWYtNGZiOWE0OWNhYzJhIiwidCI6IjcyZmQwYjVhLThhNmEtNGNmZi04OWY2LWJkZTk2MWY3ZTI1MCIsImMiOjR9&pageName=ReportSection"
                        allowfullscreen></iframe>
                </div>
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
        'http://localhost/sistema_administrativo/assents/reportes/ReportesnomasaccidentesClientes.pdf');

}


function openManualProfesional() {

    window.open('http://localhost/sistema_administrativo/assents/manual/ManualFerme.pdf');

}
</script>