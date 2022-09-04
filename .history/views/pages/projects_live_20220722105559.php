<style>
  .svg-container {
    position: relative;
    /* width: 100%; */
    height: 95%; /* 35px on small screen */
    /* vertical-align: top; */
    /* overflow: auto; */
    margin: 20px;
    /* background-color: #F5F2EB; */
    background-color: rgba(245,242,235,0.6);
    border: 1px solid #CCC;
    border-radius: 5px;
  }

  .svg-content {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .update-barchart {
    text-align: center;
  }

  .scrollable {
    overflow-y: scroll;
  }

  .disable-scroll {
    overflow-y: hidden;
  }

  .show-project {
    flex: 2;
    width: 59%;
    height: 73%;
  }
  .hide-project {
    display: none
  }
  .on-progress {
        /* text-align: center; */
        order: 2;
    /* width: 50%; */
    /* height: 15%; */
  }
</style>
<div class="main_container glass first_page_scroll">
  <header><?php require 'views/includes/navigation.php'; ?></header>

  <div id="projects-live-container" class="projects-live-container"></div>

  <!-- The Modal -->
  <div id="project-live-modal" class="project-live-modal">
    <!-- Modal content -->
    <div class="project-live-modal-content">
      <div class="project-live-modal-header">
        <span class="close-modal-btn">&times;</span>
        <h2>Bar Chart Project Using D3.js</h2>
      </div>
      <div class="project-live-modal-body">

      <!-- Bar Project -->
      <div class="on-progress">
        <div class="update-barchart">
            <button on-click="comingSoon" class="btn comming-soon">Make Your Own Chart</button>
            <p #>Coming Soon!</p>
            <p>Or Contact Me to make it for you! ↘︎ </p>
        </div>
    </div>
      </div>
      <div class="project-live-modal-footer">

        <h3>Bader Binsunbil <a href="bbins.me">bbins.me</a></h3>
      </div>
    </div>

  </div>
</div>
<script>
  function comingSoon() {
    document.querySelector(".coming-soon")
  }
</script>
<script src="<?php URLROOT; ?>public/js/projects_live.js"></script>