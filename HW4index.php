<!-- index.php main page -->
<?php include 'hw4header.php'; ?>

<main style="padding: 20px; max-width: 900px; margin: auto;">
    <h2>Welcome to Spacegrey Cinemas</h2>
    <p>Get tickets to the latest Films NOW! Comfort! Style! Adventure! Enjoy state-of-the-art sound, luxury recliners, and snacks you love for a limited time only!</p>

    <!-- Featured Movies in order of 1,2,3 -->
    <h1 id="title-1"> 🎬 Featured Films of the Week </h1>
    <section style="margin-top: 30px;">
        <div style="background-color: lightblue; padding: 15px; border-radius: 8px;">
            <h4><em>Sinners</em></h4>
            <p><strong>Genre:</strong> Horror/Adventure | <strong>Rating:</strong> R | <strong>Showtimes:</strong> 11:00 AM, 1:30 PM, 4:30 PM, 8:00 PM</p>
            <p>Trying to leave their troubled lives behind, twin brothers return to their Mississippi hometown to start again, only to discover that an even greater evil is waiting to welcome them back.</p>
            <input type="submit" value="Book" />
        </div>
         <!-- 2  -->
     <section style="margin-top: 30px;">
        <div style="background-color: lightblue; padding: 15px; border-radius: 8px;">
            <h4><em>A Minecraft Movie</em></h4>
            <p><strong>Genre:</strong> Adventure/Comedy | <strong>Rating:</strong> PG-13 | <strong>Showtimes:</strong> 10:00 AM, 2:30 PM, 5:30 PM, 7:00 PM</p>
            <p>A mysterious portal pulls four misfits into the Overworld, a bizarre, cubic wonderland that thrives on imagination. To get back home, they'll have to master the terrain while embarking on a magical quest with an unexpected crafter named Steve.</p>
            <input type="submit" value="Book" />
        </div>
         <!-- 3 -->
     <section style="margin-top: 30px;">
        <div style="background-color: lightblue; padding: 15px; border-radius: 8px;">
            <h4><em>Thunderbolts*</em></h4>
            <p><strong>Genre:</strong> Action/Adventure | <strong>Rating:</strong> PG-13 | <strong>Showtimes:</strong> 9:00 AM, 12:30 PM, 3:30 PM, 6:00 PM</p>
            <p>Ensnared in a death trap, an unconventional team of antiheroes -- Yelena Belova, Bucky Barnes, Red Guardian, Ghost, Taskmaster and John Walker -- embarks on a dangerous mission that forces them to confront the darkest corners of their pasts.</p>
            <input type="submit" value="Book" />
        </div>
    </section>

    <!-- Special promotions section -->
    <section style="margin-top: 30px;">
        <h3> 💰 This Weeks Specials: </h3>
        <ul>
            <li>Monday Madness: All tickets $3 before 3 PM</li>
            <li>Family Fridays: Free kid's popcorn with any family combo</li>
            <li>Student Sundays: 15% off with student ID</li>
        </ul>
    </section>

    <!-- Future releases section-->
    <h4 id="title-2">🔜 Coming Soon </h4>
    <section style="margin-top: 30px;">
        <ul>
            <li><strong>Heroes 4 Hire </strong> - Comedy | May 3</li>
            <li><strong>Quick N Mad 6</strong> -Thriller | May 10</li>
            <li><strong>Undefeated </strong> - Fantasy | May 17</li>
        </ul>
    </section>
</main>

<?php include 'hw4footer.php'; ?>

