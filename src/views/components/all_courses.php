<div class="category-box">
    <div class="course-container">
        <?php
        function renderCourses($courses, $class = "")
        {
            if (!isset($courses) ||!is_array($courses)) {
                return;
            }

            foreach ($courses as $course) {
                $courseName = trim(strtolower(str_replace(' ', '', $course['name'])));
                $courseNameImg = trim(str_replace(' ', '', $course['name']));
                echo '<a href="/course/' . $courseName . '">
                    <div class="course-box ' . $class . '">
                        <div class="course-text">
                            <h3>' . htmlspecialchars($course['name']) . '</h3>
                        </div>
                        <img loading="lazy" 
                        class="course-image"
                        src="/public/images/courses/' . $courseNameImg . '.jpg" 
                        alt="' . htmlspecialchars($course['name']) . '" />
                    </div>
                </a>';
            }
        }

        renderCourses($allCourses ?? []);
        renderCourses($bookedCourses ?? []); 
        renderCourses($notBookedCourses ?? [], "course-image-filter-grey");
        ?>
    </div>
</div>
