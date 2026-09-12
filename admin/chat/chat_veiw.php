<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("../../includes/auth.php");
include("../../includes/db.php");

$conect = "SELECT COUNT(id) FROM users";
$data = mysqli_query($con, $conect);
$row = mysqli_fetch_assoc($data);

include("../../includes/header.php");
include("../../includes/sidebar.php");
include("../../includes/topbar.php");

// Get the selected user
$id = $_GET['idd'] ?? 0;
$user_sql = "SELECT * FROM users WHERE id='$id'";
$user_data = mysqli_query($con, $user_sql);
$user = mysqli_fetch_assoc($user_data);
?>

<div class="bodyslide">
    <div class="chat_view_main">
        <?php if($user): ?>
        <!-- Chat Header -->
        <div class="chat_view_header">
            <div class="chat_view_header_left">
                <div class="chat_view_header_img">
                    <img src="/employee_managment/uploads/<?php echo $user['image']; ?>">
                </div>
                <div>
                    <div class="chat_view_header_name"><?php echo $user['name']; ?></div>
                    <div class="chat_view_header_status">● Online</div>
                </div>
            </div>
            <div class="chat_view_header_icons">
                <i class="fa-solid fa-video"></i>
                <i class="fa-solid fa-phone"></i>
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </div>
        </div>

        <!-- Chat Messages Area -->
        <div class="chat_view_messages" id="chatMessages">
            <div class="chat_view_message received">
                <div class="chat_view_message_text">Hello! How are you?</div>
                <div class="chat_view_message_time">10:30 AM</div>
            </div>
            <div class="chat_view_message sent">
                <div class="chat_view_message_text">I'm fine, thank you!</div>
                <div class="chat_view_message_time">10:32 AM</div>
            </div>
            <div class="chat_view_message received">
                <div class="chat_view_message_text">Great! Let's discuss the project.</div>
                <div class="chat_view_message_time">10:33 AM</div>
            </div>
        </div>

        <!-- Chat Input Area -->
        <div class="chat_view_input">
            <i class="fa-solid fa-paperclip chat_view_attach"></i>
            <input type="text" id="messageInput" placeholder="Type a message...">
            <button class="chat_view_send" onclick="sendMessage()">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </div>
        <?php else: ?>
        <!-- No User Selected -->
        <div class="chat_view_empty">
            <i class="fa-regular fa-comment-dots"></i>
            <p>Select a user to start chatting</p>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
    function sendMessage(){
        let input = document.getElementById("messageInput");
        let message = input.value.trim();

        if(message === ""){
            return;
        }

        let messages = document.getElementById("chatMessages");

        messages.innerHTML += `
            <div class="chat_view_message sent">
                <div class="chat_view_message_text">
                   ${message}
                </div>

                <div class="chat_view_message_time">
                    ${new Date().toLocaleTimeString([],{
                        hour : "2-digit",
                        minute : "2-digit"
                    })}
                </div>
            </div>
        `;
        input.value="";
    }
</script>

<?php include("../../includes/footer.php"); ?>