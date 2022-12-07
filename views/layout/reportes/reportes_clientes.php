<div class="card-body" style="margin: 2em 2em;" align="center">
    <div class="col-md-10" class="card">
        <div class="card border-secondary mb-3">
            <div class="card-header text-center">
            </div>
            <div class="card-body">
                <iframe title="Reportes no mas accidentes Clientes" width="1280" height="1024"
                    src="https://app.powerbi.com/view?r=eyJrIjoiMmNiMjhmMzAtZmNmYy00MTk5LTlmMWYtNGZiOWE0OWNhYzJhIiwidCI6IjcyZmQwYjVhLThhNmEtNGNmZi04OWY2LWJkZTk2MWY3ZTI1MCIsImMiOjR9&pageName=ReportSection"
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
        'http://localhost/Portafolio/sistema_administrativo2/assents/reportes/ReportesnomasaccidentesClientes.pdf');

}


function openManualProfesional() {

    window.open('http://localhost/sistema_administrativo/assents/manual/ManualFerme.pdf');

}
</script>