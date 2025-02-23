<div class="category__box">
    <div class="course__container">
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
                    <div class="course__box ' . $class . '">
                        <div class="course__text">
                            <h3>' . htmlspecialchars($course['name']) . '</h3>
                        </div>
                        <img loading="lazy" 
                        class="course__image"
                        src="/public/images/courses/' . $courseNameImg . '.jpg" 
                        alt="' . htmlspecialchars($course['name']) . '" />
                    </div>
                </a>';
            }
        }

        renderCourses($allCourses ?? []);
        renderCourses($bookedCourses ?? []); 
        renderCourses($notBookedCourses ?? [], "course__image-filter-grey");
        ?>
    </div>
</div>
