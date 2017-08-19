<?php
require_once('helper.php');
?>
<?php renderHeader(array('title' => 'ISC','page' => 'brca')); ?>
  
  
  <main>
  
 
 <div class="row">
 <div class="col s2" >
 <div class="collection">
        <a href="dance.php"  class="collection-item center-align"><img src="images/dance.jpg" alt="" class="circle left" width="20px" height="20px">Dance Club</a>
        <a href="music.php"  class="collection-item center-align"><img src="images/music.jpg" alt="" class="circle left" width="20px" height="20px">Music Club</a>
		<a href="drama.php"  class="collection-item center-align"><img src="images/drama.jpg" alt="" class="circle left" width="20px" height="20px">Dramatics Club</a>
		<a href="debating.php"  class="collection-item center-align"><img src="images/debating.jpg" alt="" class="circle left" width="20px" height="20px">Debating Club</a>
		<a href="lit.php"  class="collection-item center-align"><img src="images/lit.jpg" alt="" class="circle left" width="20px" height="20px">Literary Club</a>
		<a href="quizing.php"  class="collection-item center-align"><img src="images/quiz.jpg" alt="" class="circle left" width="20px" height="20px">Quizing Club</a>
		<a href="#!"  class="collection-item active center-align"><img src="images/isc.jpg" alt="" class="circle left" width="20px" height="20px">ISC</a>
		<a href="pfc.php"  class="collection-item center-align"><img src="images/pfc.jpg" alt="" class="circle left" width="20px" height="20px">PFC</a>
		<a href="hindi.php"  class="collection-item center-align"><img src="images/hindi.jpg" alt="" class="circle left" width="20px" height="20px">Hindi Samiti</a>
		<a href="fac.php"  class="collection-item center-align"><img src="images/fac.jpg" alt="" class="circle left" width="20px" height="20px">FAC</a>
      </div>
 
 
 
 
 </div>
 
  <div class="col s4">
  <div class="card" style="width:400px;height:500px">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/clubs/isc/isc rep.jpg" width="200px">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">ISC REPRESENTATIVE<i class="material-icons right">more_vert</i></span>
      <p><a href="#">AAKASH SINHA</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Aakash Sinha<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  </div>
  
  <div class="col s4"> 
  <div class="coloumn">
  <div class ="row s2">
  
      <div class="col s12">
        <blockquote><h5>
      ACTIVE MEMBERS
    </h5></blockquote>
        </div>
      </div>
    </div>
	
  <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header "><i class="material-icons">play_arrow</i>Aryaman Garg</div>
      <div class="row collapsible-body"><img src="images/clubs/debating/aryaman.jpg" alt="" class="col s4" width="100px" height="100px"><p>Enthusiast in debating</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">play_arrow</i>Anuj Dhawan</div>
      <div class="row collapsible-body"><img src="images/clubs/debating/anuj.jpg" alt="" class="col s4" width="100px" height="100px" ><p>Enthusiast in debating</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">play_arrow</i>Abhishek Agrawal</div>
      <div class="row collapsible-body"><img src="images/clubs/debating/abhishek.jpg" alt="" class="col s4" width="100px" height="100px" ><p>Enthusiast in debating</p></div>
    </li>
		  </ul>
  
  </div>
  </div>
  
  
  
  <div class="container">
  <blockquote><h5>
      EVENTS THIS YEAR
    </h5></blockquote>
	<div class="card white z-depth-1">
  <table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="name">Tentavive Dates</th>
              <th data-field="price">Description</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Inter Hostel British Parliamentary Debate</td>
            <td>August</td>
            <td>First debating event of the session. With debates being held in the British format. Hostel will have to send adjudicators and speakers. 2 speakers per team.</td>
          </tr>
          <tr>
            <td>Stalwarts</td>
            <td>September </td>
            <td>
Freshers’ event. Spread over 2/3 rounds with the first being extempore and the rest being parliamentary style debates. 
</td>
          </tr>
          <tr>
            <td>Inter Hostel Asian Parliamentary Debate</td>
            <td>January</td>
            <td>
Flagship event of the debating club. Asian style parliamentary debate. 3 members per team + adjudicators. 
 </td>
          </tr>
        </tbody>
      </table>
  </div>
  </div>
  
  <div class="container">
  <blockquote><h5>
      MEMORIES
    </h5></blockquote>
	<p>GROUP DANCE 2016</p>
	<video class="responsive-video" controls style="width:800px;height:500px">
    <source src="videos/gd2016.MOV" type="video/mp4">
  </video>
  </div>
  
  <div class="container"> 
  <blockquote><h5>
      PREVIOUS ACHIVEMENTS
    </h5></blockquote>
	</div>
  
  <div class="container valign-wrapper">
   
	<i class="material-icons">label </i>&nbsp&nbsp&nbsp&nbsp&nbspDUO DANCE COMPETITION 2014:-2nd position</div>
	
  
  
	
  
  
  </main>
  
 

<?php renderFooter(); ?>
