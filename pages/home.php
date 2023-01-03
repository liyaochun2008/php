<?php
include "../php_executions/jdbc.php";
$sql_name ="SELECT * FROM `home` order by ID;";
$result_name = $conn->query($sql_name); 
$conn->close(); 
$title = array();
  while($row = $result_name->fetch_assoc()) {
	  Array_push($title,$row["Title"]);
  }
?>
<!-- index.html -->
<!DOCTYPE html>
<html>

<head>
	<!-- Add a title for the page -->
	  <title><?php echo $title[0] ?></title>
	  <!-- Link to the style.css file -->
  <link rel="stylesheet" href="../css/style.css" />
</head>
<!-- layout of home page -->
<body id="home">
  <main>
    <section>
		
		 <!-- Add a heading for the section -->
      <h2><?php echo $title[1] ?></h2>
		<!-- Add a class to the paragraph for styling purposes -->
      <p class="p1">Welcome to the official website of the FC Barcelona Supporters Club! As a member of our club, you
        are part of a community of passionate fans who share a love for one of the greatest football clubs in the world.
        Here, you will find all the latest news, events, and activities related to FC Barcelona, as well as information
        about how to get involved and show your support for the team. We are excited to have you as a member and look
        forward to connecting with you as we cheer on the Blaugrana together. Visca Barรงa!</p>
    </section>
	   <!-- Add a class to the section for styling purposes -->
    <section class="flex-container">
		 <!-- Add alt text to the image for accessibility purposes -->
      <img src="../assets/images/fans1.png" width="600" alt="A group of FC Barcelona fans holding a banner and flags">
      <aside> <!-- Add a heading for the aside element -->
        <h2><?php echo $title[2] ?></h2><br>
		   <!-- Add a paragraph with information about official supporters clubs -->
        <p>An official supporters club is a group of fans of a particular sports team or organization who have come
          together to support the team through organized activities and events. These clubs often have official
          recognition from the team and may have access to special events and activities. Members of an official
          supporters club may also have the opportunity to participate in team-related events and activities, such as
          meet-and-greets with players or exclusive access to games and practices. Overall, an official supporters club
          is a way for fans to show their support for their favorite team and connect with other fans who share their
          passion.</p>
      </aside>
    </section>
	  <!-- Add a class to the section for styling purposes -->
    <section class="flex-container">

      <section><!-- Add a heading for the section -->
        <h2> <?php echo $title[3] ?></h2><br>
		  <!-- Add a paragraph with information about what it means to be a FC Barcelona fan -->
        <p>Being a part of a FC Barcelona supporter fan club is a thrilling and exciting experience. As a member, you
          will have the opportunity to show your passion and support for the team, and connect with other fans who share
          your love for FC Barcelona. You will also have access to exclusive perks and benefits, such as discounts on
          tickets and merchandise, and the opportunity to attend special events and meetings. Additionally, being a
          member of a fan club allows you to be more involved with the team and stay up-to-date on the latest news and
          developments. Overall, being a part of a FC Barcelona supporter fan club is a rewarding and enriching
          experience for any fan of the team.</p>
      </section>
      <aside>
        <img src="../assets/images/fans2.jpeg" width="570" height="400">
      </aside>
    </section>
    <section class="flex-container">
      <img src="../assets/images/fans3.jpg" width="600"  height="400">
      <aside>
        <h2> <?php echo $title[4] ?></h2><br>
        <p>To become a member of a FC Barcelona supporter fan club, you will need to follow these steps:
        <ol>
          <li> Find a local supporter fan club in your area by checking online or asking around among friends and fellow
          fans.</li>

          <li>Contact the club to inquire about membership requirements and procedures. Each club may have different rules
          and regulations, so it's important to get all the information beforehand.</li>

          <li></li> Fill out the membership application form, which will typically require personal information such as your name,
          address, and contact details.</li>

          <li>Submit the completed form, along with any required documents or fees, to the club.</li>

          <li>Attend club meetings and events to get involved and meet other members.</li>
        </ol>

        By joining a supporter fan club, you can show your support for FC Barcelona and connect with other fans who
        share your passion for the team. You will also have access to exclusive perks and benefits, such as discounts on
        tickets and merchandise, and the opportunity to attend special events and meetings.</p>
      </aside>
    </section>
    <section>
      <h2>The FC Barcelona Fan Club Rewards Program:<br><?php echo $title[5] ?></h2>
      <p class="p1">
<ul class="p1">
  <li> Attendance points: Members can earn points for attending club meetings and events, such as watch parties, fundraisers, and social gatherings. These points can be redeemed for exclusive merchandise and other rewards.</li>
  <li> Referral program: Members can earn points or rewards by referring friends and family to join the club.</li>
  <li>Merchandise discounts: Members can receive discounts on official FC Barcelona merchandise, such as jerseys, hats, and scarves.</li>
  <li>Ticket discounts: Members can receive special discounts on tickets for FC Barcelona matches, both home and away.</li>
  <li>Meet-and-greet opportunities: Members can enter into a drawing to win the chance to meet their favorite players and coaches in person.</li>
  <li>Exclusive events: Members can attend exclusive events and meetings, such as pre-game parties, meet-and-greets with players and coaches, and behind-the-scenes tours of the stadium.</li>
</ul>

      </p>

    </section>


  </main>
</body>

</html>