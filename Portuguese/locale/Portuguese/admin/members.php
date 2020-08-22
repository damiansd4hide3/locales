<?php
// Member Management Options
$locale['400'] = "Gestão de Utilizadores";
$locale['401'] = "Utilizador";
$locale['402'] = "Add New Member";
$locale['403'] = "Tipo de Utilizador";
$locale['404'] = "Opções";
$locale['405'] = "Visualizar";
$locale['406'] = "Editar";
$locale['407'] = "Activar";
$locale['408'] = "Desbanir";
$locale['409'] = "Banir";
$locale['410'] = "Apagar";
$locale['411'] = "There are no %s members";
$locale['412'] = " beginning with ";
$locale['413'] = " matching ";
$locale['414'] = "Mostrar Tudo";
$locale['415'] = "Search for member:";
$locale['416'] = "Pesquisar";
$locale['417'] = "Select Action";
$locale['418'] = "Cancelar";
$locale['419'] = "Reintegrar";
// Ban/Unban/Delete Member
$locale['420'] = "Ban Imposed";
$locale['421'] = "Ban Removed";
$locale['422'] = "Member Deleted";
$locale['423'] = "Are you sure you wish to delete this member?";
$locale['424'] = "Member Activated";
$locale['425'] = "<h2>Warning!</h2><br />
You are about to delete user <strong>%s</strong> !<br />
The following content <u>posted by this user</u> on this site will be deleted if you proceed:<br />
- Articles<br />
- News<br />
- Forum threads. Note that posts made by other users in these threads will also be deleted, along with the poll votes and attachments existent in this threads.<br />
- Forum posts<br />
- Forum attachments<br />
- Comments<br />
- Private messages sent or received by this user<br />
- Poll votes<br />
- Ratings given<br />
Unless this is a spammer for eg. we recommend you to Ban, Suspend, Cancel or Anonymize this user.<br />
<br />
Are you sure you want to delete this user?<br />";
$locale['426'] = "Sim";
$locale['427'] = "Não";
// Edit Member Details
$locale['430'] = "Edit Member";
$locale['431'] = "Member details updated";
$locale['432'] = "Return to Members Admin";
$locale['433'] = "Voltar ao Índice de Admin";
$locale['434'] = "Unable to Update Member details:";
// Extra Edit Member Details form options
$locale['440'] = "Guardar Alterações";
// Update Profile Errors
$locale['450'] = "Cannot edit primary administrator.";
$locale['451'] = "You must specify a user name and email address.";
$locale['452'] = "O nome de utilizador contém caractéres inválidos.";
$locale['453'] = "The user name [user_name] is in use.";
$locale['454'] = "Invalid email address.";
$locale['455'] = "The email address [user_email] is in use.";
$locale['456'] = "New Passwords do not match.";
$locale['457'] = "Invalid password, use alpha numeric characters only.<br />
Password must be a minimum of 6 characters long.";
$locale['458'] = "<strong>Warning:</strong> unexpected script execution.";
// View Member Profile
$locale['470'] = "Perfil do Membro";
$locale['472'] = "Estatísticas";
$locale['473'] = "Grupos de Utilizadores";
// Add Member Errors
$locale['480'] = "Add Member";
$locale['481'] = "The member account has been created.";
$locale['482'] = "The member account could not be created.";
// Suspension Log
$locale['510s'] = "Suspension Log for ";
$locale['511s'] = "There are no recorded suspensions for this member in the suspension log.";
$locale['512s'] = "Previous suspensions of ";
$locale['513'] = "No."; // as in number
$locale['514'] = "Data";
$locale['515'] = "Motivo";
$locale['516'] = "Suspending Administrator";
$locale['517'] = "Acções de Sistema";
$locale['518'] = "Back to User Profile";
$locale['519'] = "Suspension Log for this User ";
$locale['520'] = "Lifted: ";
$locale['521'] = "IP: ";
$locale['522'] = "Not yet reinstated";
$locale['540'] = "Erro";
$locale['541'] = "Error: You must state a reason for the Suspension!";
$locale['542'] = "Error: You must state a reason for the Security Ban!";
// User Management Admin
$locale['550'] = "Suspend User: ";
$locale['551'] = "Duration in days:";
$locale['552'] = "Reason:";
$locale['553'] = "Suspender";
$locale['554'] = "There are no recorded suspensions for this member in the suspension log.";
$locale['555'] = "If you decide that this user should be banned click on 'Ban'";
$locale['556'] = "Lift Suspension of User: ";
$locale['557'] = "Lift Suspension";
$locale['558'] = "Lift Ban of User: ";
$locale['559'] = "Lift Ban ";
$locale['560'] = "Lift Security Ban of User: ";
$locale['561'] = "Lift Security Ban";
$locale['562'] = "Ban User: ";
$locale['563'] = "Security Ban User: ";
$locale['585a'] = "Please specify a reason for why you are banning or unbanning ";
$locale['566'] = "Ban lifted";
$locale['568'] = "Security Ban imposed";
$locale['569'] = "Security Ban lifted";
$locale['572'] = "Member suspended";
$locale['573'] = "Suspension lifted";
$locale['574'] = "Member deactivated";
$locale['575'] = "Member reactivated";
$locale['576'] = "Account cancelled";
$locale['577'] = "Account cancellation undone";
$locale['578'] = "Account cancelled and anonymized";
$locale['579'] = "Account anonymization undone";
$locale['580'] = "Desativar Membros Inactivos";
$locale['581'] = "You have more then 50 inactive users and will have to run the deactivation process <strong>%d times</strong>.";
$locale['582'] = "Reactivar";
$locale['583'] = "Re-instate";
$locale['584'] = "Select new status";
$locale['585'] = "This Member was originally banned for security reasons! Are you certain you want to unban this member now?";
$locale['590'] = "Suspender";
$locale['591'] = "Unsuspend";
$locale['592'] = "suspending";
$locale['593'] = "unsuspending";
$locale['594'] = "Please specify a reason for why you are ";
$locale['595'] = " the user ";
$locale['596'] = "Duration:";
$locale['600'] = "Security ban";
$locale['601'] = "security banning";
$locale['602'] = "Desbanir";
$locale['603'] = "unbanning";
$locale['604'] = "Reason:";
// Deactivation System
$locale['610'] = "<strong>%d user(s)</strong> have not logged in for <strong>%d day(s)</strong> and have been marked as inactive.
By deactivating these users they will have <strong>%d day(s)</strong> before they are %s.";
$locale['611'] = "Please note that some users may have submitted content to your site such as forum posts, comments, photos etc.
these will be deleted when deactivated users are being deleted.";
$locale['612'] = "utilizador";
$locale['613'] = "users";
$locale['614'] = "Desactivar";
$locale['615'] = "apagado permanentemente";
$locale['616'] = "anonymize";
$locale['617'] = "Warning:";
$locale['618'] = "É altamente recomendável alterar a acção de desactivação para anonimizar em vez de apagar para evitar a perda de dados!";
$locale['619'] = "You can do so here.";
$locale['620'] = "anonymize";
$locale['621'] = "Desactivação automática de usuários inactivos.";
