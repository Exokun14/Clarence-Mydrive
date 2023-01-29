window.onload = showAssignmentTab();

function showAssignmentTab() {
    displayAssignmentContent();

    document.getElementById("assign-tab").style.display = "unset";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("archive-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("archive-assignment").style.display = "unset";
    document.getElementById("archive-quiz").style.display = "none";
    document.getElementById("archive-assessment").style.display = "none";
    document.getElementById("archive-exam").style.display = "none";
    document.getElementById("archive-project").style.display = "none";

    document.getElementById("upload-assignment-tab").style.display = "unset";
    document.getElementById("upload-quiz-tab").style.display = "none";
    document.getElementById("upload-assessment-tab").style.display = "none";
    document.getElementById("upload-exam-tab").style.display = "none";
    document.getElementById("upload-project-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("archive-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "#f1efef";

}

function showQuizTab() {
    displayQuizContent();

    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "unset"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("archive-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("archive-assignment").style.display = "none";
    document.getElementById("archive-quiz").style.display = "unset";
    document.getElementById("archive-assessment").style.display = "none";
    document.getElementById("archive-exam").style.display = "none";
    document.getElementById("archive-project").style.display = "none";

    document.getElementById("upload-assignment-tab").style.display = "none";
    document.getElementById("upload-quiz-tab").style.display = "unset";
    document.getElementById("upload-assessment-tab").style.display = "none";
    document.getElementById("upload-exam-tab").style.display = "none";
    document.getElementById("upload-project-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("archive-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showAssessmentTab() {
    displayAssessmentContent();

    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "unset";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("archive-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("archive-assignment").style.display = "none";
    document.getElementById("archive-quiz").style.display = "none";
    document.getElementById("archive-assessment").style.display = "unset";
    document.getElementById("archive-exam").style.display = "none";
    document.getElementById("archive-project").style.display = "none";

    document.getElementById("upload-assignment-tab").style.display = "none";
    document.getElementById("upload-quiz-tab").style.display = "none";
    document.getElementById("upload-assessment-tab").style.display = "unset";
    document.getElementById("upload-exam-tab").style.display = "none";
    document.getElementById("upload-project-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("archive-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showExamTab() {
    displayExamContent();

    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "unset";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("archive-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("archive-assignment").style.display = "none";
    document.getElementById("archive-quiz").style.display = "none";
    document.getElementById("archive-assessment").style.display = "none";
    document.getElementById("archive-exam").style.display = "unset";
    document.getElementById("archive-project").style.display = "none";

    document.getElementById("upload-assignment-tab").style.display = "none";
    document.getElementById("upload-quiz-tab").style.display = "none";
    document.getElementById("upload-assessment-tab").style.display = "none";
    document.getElementById("upload-exam-tab").style.display = "unset";
    document.getElementById("upload-project-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("archive-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showProjectTab() {
    displayProjectContent()

    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "unset";
    document.getElementById("archive-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("archive-assignment").style.display = "none";
    document.getElementById("archive-quiz").style.display = "none";
    document.getElementById("archive-assessment").style.display = "none";
    document.getElementById("archive-exam").style.display = "none";
    document.getElementById("archive-project").style.display = "unset";

    document.getElementById("upload-assignment-tab").style.display = "none";
    document.getElementById("upload-quiz-tab").style.display = "none";
    document.getElementById("upload-assessment-tab").style.display = "none";
    document.getElementById("upload-exam-tab").style.display = "none";
    document.getElementById("upload-project-tab").style.display = "unset";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("archive-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showArchiveTab() {
    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("archive-tab").style.display = "unset";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("archive-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showUploadTab() {
    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("archive-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "unset";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("archive-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "rgb(185, 190, 190)";
}