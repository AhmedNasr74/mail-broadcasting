<?php

namespace Database\Seeders;

use App\Models\BenefitCategory;
use App\Traits\Seeder\EventCategories;
use Illuminate\Database\Seeder;

class BenefitCategorySeeder extends Seeder
{
    use EventCategories;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = BenefitCategory::updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Media & Press']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'TV Advertisement during breaks on the main screen']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'TV (media channels) interviews with the partner senior executives']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Print media interviews with the partner senior executives']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Advertisement inside the Event main booklet']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'short interview video on the Event’s website']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'short ad the Event’s website']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'short video on showcased on the Event’s website']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Referencing in official Press Releases']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Special news Press Release']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & logo on ads campaign']);

        $b = BenefitCategory::updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Exposure during the event']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & logo on ads campaign']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => '(X) minutes ad displayed during the opening']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => '(X) digital inch screens with special animated logo and a short film will be placed at the forum hall main entrance, main exit, press room, reception, and gala dinner area']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo Animation on auditorium main screen']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on Stage']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on Podium']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on Media Wall']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on Attendee Photo Wall']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & logo on banner in gala dinner area']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & logo will be displayed to stand out on all the banners placed within the forum venue']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & logo will on widescreen in pre-functional area, visible to delegates and TV cameras']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Brochures/flyers/catalogs distribution in high traffic areas']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Brochure/flyers/catalogs to be distributed within the delegates bags']);

        $b = BenefitCategory::updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Exposure on Printed Material']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo will be displayed on all branding of pre event printed material']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo inside the forum main booklet']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & logo on program agenda']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Dedicated Pages in the event guide']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on Organizers shawl']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on Badges']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on Tickets']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on the cover & inside the post-forum report submitted to governmental entities']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & logo will be printed on give aways']);

        $b = BenefitCategory::updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Exposure on Online']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo & Brief on the forum’s website (linked to the sponsors website)']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on website banners']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo in event online advertisements']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo in Social Media Advertisements']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Name & Logo on registration emails']);

        $b = BenefitCategory::updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Thanks & Recognition']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Participate in the reception and welcoming of the Honorary Patronage']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'A Thank you note in the opening speech']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'A special trophy will be delivered during the opening ceremony']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'A speech during the lunch banquet or any other forum-related event']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Advertisement of appreciation for sponsors on event online and social media']);

        $b = BenefitCategory::updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Privileges']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Free Seats/Tickets/ Admissions (Type of Seat or ticket must be specified)']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => '(X%) Discount on Seats/ Tickets/ Admissions (Type of Seat or ticket must be specified)']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => '(X) tables Reserved lunch/Dinner']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => '(X) person free access to the business lounge for one-to-one meetings']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => '(X) night/s accommodation in (room type) provided to (Y) Sponsor representatives/guests']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => '(X) days a car with a driver']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => '(X) m2 exhibition booth (Specify location)']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Complementary exhibition booth design']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Complementary exhibition booth construction']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'Attendee data (post-event)']);
        $b->options()->updateOrCreate(['event_category_id' => $this->sportCategoryId(),'name' => 'DVD souvenir folder containing the forum films and photo album']);

    }
}
