<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4" id="short-title" >My name is Start Bootstrap and I help brands grow.</p>
                    <p class="text-muted" id="short-des" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" id="twitter" class="text-gradient" href="#"><i class="bi bi-twitter"></i></a>
                        <a target="_blank" id="linkedin" class="text-gradient" href="#"><i class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="github" class="text-gradient" href="#"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>

    aboutAll();

  async  function aboutAll() {

      try {
          let URL = "/aboutData";

      let response = await axios.get(URL);

      document.getElementById('short-title').innerHTML = response.data['title'];
      document.getElementById('short-des').innerHTML = response.data['details'];


      }catch (e) {
          alert(e);
      }

    }

socialLink();


    async  function socialLink() {

        try {
            let URL = "/socialData";

            let response = await axios.get(URL);


            //  showing content and remove loader
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            let twitter = response.data['twitterLink'];
            let linkedin = response.data['linkedinLink'];
            // let github = response.data['githubLink'];

            document.getElementById('twitter').setAttribute('href',twitter);
            document.getElementById('linkedin').setAttribute('href',linkedin);
            // document.getElementById('github').setAttribute('href',github);
            document.getElementById('github').href = response.data['githubLink'];


        }catch (e) {
            alert(e);
        }

    }



</script>
