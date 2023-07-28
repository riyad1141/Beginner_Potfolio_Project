<div class="mb-0">
    <div class="d-flex align-items-center mb-4">
        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
    </div>
    <div id="language-list" class="row row-cols-1 row-cols-md-3 mb-4">


    </div>

</div>


<script>

    languageList();

  async  function languageList() {
        try {

          let  URL = "/languageData";

        let response = await axios.get(URL);

            //  showing content and remove loader
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

        response.data.forEach(function (item) {
            document.getElementById('language-list').innerHTML += (`
            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">${item['name']}</div></div>
            `);
        });

        }catch (error) {
            alert(error)
        }
    }


</script>




