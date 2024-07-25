<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_mb2nl
 * @copyright 2017 - 2022 Mariusz Boloz (mb2moodle.com)
 * @license   Commercial https://themeforest.net/licenses
 *
 */

defined('MOODLE_INTERNAL') || die();

$settings = theme_mb2nl_enrolment_options();
$reviews = theme_mb2nl_is_review_plugin();
$updatedate = theme_mb2nl_course_updatedate();
$coursedate = theme_mb2nl_theme_setting( $PAGE,'coursedate' );
$ecinstructor = theme_mb2nl_theme_setting( $PAGE,'ecinstructor' );
$coursecontext = context_course::instance( $COURSE->id );
$reviewlist = '';
$reviewsummary = '';
$courserating = '';
$imgcls = ' noimg';
$herostyle = '';
$skills = $settings->skills ? $settings->skills : theme_mb2nl_mb2fields_filed('mb2skills');
$requirements = theme_mb2nl_mb2fields_filed('mb2requirements');
$slogan = theme_mb2nl_course_intro(NULL, $settings);
$headerstyle = theme_mb2nl_headerstyle();
$headercolorscheme = theme_mb2nl_mb2fields_filed('mb2scheme') ? theme_mb2nl_mb2fields_filed('mb2scheme') : theme_mb2nl_theme_setting($PAGE, 'headercolorscheme');
$shemecls = $headerstyle === 'transparent_light' || ( $headercolorscheme === 'light' && $headerstyle !== 'transparent' ) ?
' light' : ' dark';
$mb2section = theme_mb2nl_mb2fields_filed('mb2section');

if ( theme_mb2nl_get_enroll_hero_url() )
{
	$herostyle = ' data-bg="' . theme_mb2nl_get_enroll_hero_url() . '"';
	$imgcls = ' isimg lazy';
}

if ( $reviews )
{
	if ( ! class_exists( 'Mb2reviewsHelper' ) )
	{
		require_once( $CFG->dirroot . '/local/mb2reviews/classes/helper.php' );
	}

	$reviewlist = Mb2reviewsHelper::review_list();
	$reviewsummary = Mb2reviewsHelper::review_summary();
	$courserating = Mb2reviewsHelper::course_rating($COURSE->id);
}

$PAGE->requires->js_call_amd( 'theme_mb2nl/enrol','contentTabs' );
$PAGE->requires->js_call_amd( 'theme_mb2nl/enrol','contentOutTabs' );

?>
<div class="course-header<?php echo $shemecls . $imgcls; ?>"<?php echo $herostyle; ?>>
	<div class="inner">
		<div class="row-topgap"></div>
		<div class="header-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<div class="course-info1">
							<?php echo theme_mb2nl_categories_tree( $COURSE->category ); ?>
							<h1 class="course-heading hsize-2"><?php echo format_text($COURSE->fullname, FORMAT_HTML) . theme_mb2nl_course_edit_link(); ?></h1>
							<?php if ( $slogan ) : ?>
								<div class="course-slogan"><?php echo $slogan; ?></div>
							<?php endif; ?>
							<div class="course-meta1">
								<?php if ( theme_mb2nl_is_bestseller( $coursecontext->id, $COURSE->category ) ) : ?>
									<span class="bestseller-flag"><?php echo get_string( 'bestseller', 'local_mb2builder' ); ?></span>
								<?php endif; ?>
								<?php if ( $courserating ) : ?>
									<a href="#course-ratings" aria-controls="course_nav_reviews_content" class="out-navitem">
										<div class="course-rating">
											<span class="ratingnum"><?php echo $courserating; ?></span>
											<?php echo Mb2reviewsHelper::rating_stars($COURSE->id, false, 'sm'); ?>
											<span class="ratingcount">(<?php
											echo get_string('ratingscount', 'local_mb2reviews', array('ratings'=>Mb2reviewsHelper::course_rating_count($COURSE->id) ) ); ?>)</span>
										</div>
									</a>
								<?php endif; ?>
								<span class="course-students"><?php echo
								get_string('teacherstudents', 'theme_mb2nl', array('students'=>theme_mb2nl_get_sudents_count())); ?></span>
								<?php if ( $updatedate ) : ?>
									<span class="course-updated">
										<?php echo $updatedate; ?>
									</span>
								<?php endif; ?>
							</div>
							<?php if ( $ecinstructor ) : ?>
							<div class="course-meta2">
								<a href="#course-instructors" aria-controls="course_nav_instructors_content" class="out-navitem">
									<?php echo theme_mb2nl_course_list_teachers( $COURSE->id, array( 'image' => 1 ) ); ?>
								</a>
							</div>
							<?php endif; ?>
							<div class="course-mobile-info">
								<?php echo theme_mb2nl_block_enrol(true); ?>
							</div>
						</div>
						
					</div>
				</div>
				</div>
				<div class="enrol-course-nav">
				<div class="container-fluid">
				<div class="row">
					<div class="col-lg-9 enrol-contentcol">
							<ul>
								<li class="enrol-course-navitem active"><button class="themereset" aria-controls="course_nav_desc_content"><?php
								echo get_string('overview', 'theme_mb2nl'); ?></button></li>
								<?php if ( $mb2section ) : ?>
									<li class="enrol-course-navitem"><button class="themereset" aria-controls="course_nav_mb2section_content"><?php
									echo theme_mb2nl_mb2sectionfiledname(); ?></button></li>
								<?php endif; ?>
								<?php if ( $settings->elrollsections && theme_mb2nl_course_sections_accordion() ) : ?>
									<li class="enrol-course-navitem"><button class="themereset" aria-controls="course_nav_sections_content"><?php
								echo get_string( 'headingsections', 'theme_mb2nl' ); ?></button></li>
								<?php endif; ?>
								<?php if ( $ecinstructor ) : ?>
									<li class="enrol-course-navitem"><button class="themereset" aria-controls="course_nav_instructors_content"><?php
								echo get_string( 'headinginstructors', 'theme_mb2nl' ); ?></button></li>
								<?php endif; ?>
								<?php if ( $reviewsummary || $reviewlist ) : ?>
									<li class="enrol-course-navitem"><button class="themereset" aria-controls="course_nav_reviews_content">
										<?php echo get_string( 'reviews', 'theme_mb2nl' ); ?>
										<?php if ( $courserating ) : ?>
											<?php echo Mb2reviewsHelper::rating_stars($COURSE->id, false, 'xs'); ?>
											<span class="course-rating"><?php echo $courserating; ?></span>
										<?php endif; ?>
									</button></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
<div class="course-details">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-9 enrol-contentcol">
				<div id="course_nav_desc_content" class="enrol-course-navcontent active">
					<div class="details-section aboutcourse">
						<h2 class="details-heading hsize-2"><?php echo get_string( 'headingaboutcourse', 'theme_mb2nl' ); ?></h2>
						<div class="details-content">
							<div class="content-inner"><div><?php echo theme_mb2nl_get_mb2course_description(); ?></div></div>
							<?php echo theme_mb2nl_moreless(); ?>
						</div>
					</div>
					<?php if ( $skills ) : ?>
						<div class="details-section skills">
							<h2 class="details-heading hsize-2"><?php echo get_string( 'headingwhatlearn', 'theme_mb2nl' ); ?></h2>
							<div class="details-content">
								<div class="content-inner"><?php echo theme_mb2nl_sr_list( $skills); ?></div>
							</div>
						</div>
					<?php endif; ?>
					<?php if ( $requirements ) : ?>
						<div class="details-section requirements">
							<h2 class="details-heading hsize-2"><?php echo get_string( 'headingrequirements', 'theme_mb2nl' ); ?></h2>
							<div class="details-content">
								<div class="content-inner"><?php echo theme_mb2nl_sr_list( $requirements, false, 999, 2 ); ?></div>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<?php if ( $mb2section ) : ?>
					<div id="course_nav_mb2section_content" class="enrol-course-navcontent">
						<div id="course-mb2section" class="details-section mb2section">
							<h2 class="details-heading hsize-2"><?php echo theme_mb2nl_mb2sectionfiledname(); ?></h2>
							<div class="details-content">
								<div class="content-inner"><?php echo $mb2section; ?></div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div id="course_nav_sections_content" class="enrol-course-navcontent">
					<?php if ( $settings->elrollsections && theme_mb2nl_course_sections_accordion() ) : ?>
						<div class="details-section sections">
							<h2 class="details-heading hsize-2"><?php echo get_string( 'headingsections', 'theme_mb2nl' ); ?></h2>
							<div class="details-content">
								<div class="content-inner"><?php echo theme_mb2nl_course_sections_accordion(); ?></div>
							</div>
						</div>
					<?php endif; ?>
				</div>
				<?php if ( $ecinstructor ) : ?>
					<div id="course_nav_instructors_content" class="enrol-course-navcontent">
						<div id="course-instructors" class="details-section instructors">
							<h2 class="details-heading hsize-2"><?php echo get_string( 'headinginstructors', 'theme_mb2nl' ); ?></h2>
							<div class="details-content">
								<div class="content-inner"><?php echo theme_mb2nl_course_teachers_list( $reviews ); ?></div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if ( $reviewsummary || $reviewlist ) : ?>
					<div id="course_nav_reviews_content" class="enrol-course-navcontent">
						<?php if ( $reviewsummary ) : ?>
							<div id="course-ratings" class="details-section reviews-summary">
								<h2 class="details-heading hsize-2"><?php echo get_string( 'courserating', 'local_mb2reviews' ); ?></h2>
								<?php echo $reviewsummary; ?>
							</div>
						<?php endif; ?>
						<?php if ( $reviewlist ) : ?>
							<div class="details-section reviews">
								<h2 class="details-heading hsize-2"><?php echo get_string( 'reviews', 'local_mb2reviews' ); ?></h2>
								<?php echo $reviewlist; ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<div id="main-content">
					<section id="region-main" class="content-col">
						<div id="page-content">
							<?php echo $OUTPUT->main_content(); ?>
						</div>
					</section>
				</div>
			</div>
			<div class="col-lg-3 enrol-sidebar">
				<div class="sidebar-inner">
					<div class="fake-block block-video">
						<div class="video-banner lazy" data-bg="<?php echo theme_mb2nl_course_image_url($COURSE->id, true); ?>">
							<?php echo theme_mb2nl_course_video_lightbox(); ?>
						</div>
					</div>
					<div class="fake-block block-enrol">
						<?php echo theme_mb2nl_block_enrol(); ?>
					</div>
					<div class="fake-block block-custom-fields">
						<?php echo theme_mb2nl_course_fields( $COURSE->id, false ); ?>
					</div>
					<?php //if ( $COURSE->format !== 'singleactivity' ) : ?>
						<div class="fake-block block_activities">
							<h4 class="h5 block-heading"><?php echo get_string( 'headingactivities', 'theme_mb2nl' ); ?></h4>
							<?php echo theme_mb2nl_activities_list(); ?>
						</div>
					<?php //endif; ?>
					<?php echo theme_mb2nl_course_tags_block($COURSE->id); ?>
					<?php if ( $settings->shareicons ) : ?>
						<div class="fake-block block-shares">
							<h4 class="h5 block-heading"><?php echo get_string( 'headingsocial', 'theme_mb2nl' ); ?></h4>
							<?php echo theme_mb2nl_course_share_list( $COURSE->id, format_text($COURSE->fullname, FORMAT_HTML) ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $OUTPUT->blocks('side-pre', theme_mb2nl_block_cls($PAGE, 'side-pre')); ?>
<?php echo $OUTPUT->standard_after_main_region_html(); ?>
<?php echo $OUTPUT->theme_part('region_adminblock'); ?>
<?php echo $OUTPUT->theme_part('region_bottom'); ?>
<?php echo $OUTPUT->theme_part('region_bottom_abcd'); ?>
<?php echo $OUTPUT->theme_part('footer', array('sidebar'=> 0)); ?>
