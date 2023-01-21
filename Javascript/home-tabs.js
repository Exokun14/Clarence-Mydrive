window.onload = showAssignmentTab();

function showAssignmentTab() {
    document.getElementById("assign-tab").style.display = "unset";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showQuizTab() {
    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "unset"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showAssessmentTab() {
    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "unset";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showExamTab() {
    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "unset";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showProjectTab() {
    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "unset";
    document.getElementById("upload-tab").style.display = "none";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "rgb(185, 190, 190)";
    document.getElementById("upload-title").style.color = "#f1efef";
}

function showUploadTab() {
    document.getElementById("assign-tab").style.display = "none";
    document.getElementById("quiz-tab").style.display = "none"
    document.getElementById("assessment-tab").style.display = "none";
    document.getElementById("exam-tab").style.display = "none";
    document.getElementById("project-tab").style.display = "none";
    document.getElementById("upload-tab").style.display = "unset";

    document.getElementById("assign-title").style.color = "#f1efef";
    document.getElementById("quiz-title").style.color = "#f1efef";
    document.getElementById("assessment-title").style.color = "#f1efef";
    document.getElementById("exam-title").style.color = "#f1efef";
    document.getElementById("project-title").style.color = "#f1efef";
    document.getElementById("upload-title").style.color = "rgb(185, 190, 190)";
}