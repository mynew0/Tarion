<?php

// Dane logowania!
mysql_connect("mysql.mydevil.net", "m12225_ogame", "Fisher2") or die(mysql_error());

// Dane do bazy!
mysql_select_db("m12225_ogame") or die(mysql_error());

// Naprawa!
mysql_query("REPAIR TABLE `uni1_aks`, `uni1_alliance`, `uni1_alliance_ranks`, `uni1_alliance_request`, `uni1_banned`, `uni1_buddy`, `uni1_buddy_request`, `uni1_chat_bans`, `uni1_chat_invitations`, `uni1_chat_messages`, `uni1_chat_online`, `uni1_config`, `uni1_diplo`, `uni1_fleets`, `uni1_fleet_event`, `uni1_log`, `uni1_log_fleets`, `uni1_messages`, `uni1_multi`, `uni1_news`, `uni1_notes`, `uni1_planets`, `uni1_raports`, `uni1_records`, `uni1_session`, `uni1_shortcuts`, `uni1_statpoints`, `uni1_ticket`, `uni1_ticket_answer`, `uni1_ticket_category`, `uni1_topkb`, `uni1_users`, `uni1_users_to_acs`, `uni1_users_to_extauth`, `uni1_users_to_topkb`, `uni1_users_valid`, `uni1_vars`, `uni1_vars_rapidfire`, `uni1_vars_requriements`");

// Optymalizacja!
mysql_query("OPTIMIZE TABLE `uni1_aks`, `uni1_alliance`, `uni1_alliance_ranks`, `uni1_alliance_request`, `uni1_banned`, `uni1_buddy`, `uni1_buddy_request`, `uni1_chat_bans`, `uni1_chat_invitations`, `uni1_chat_messages`, `uni1_chat_online`, `uni1_config`, `uni1_diplo`, `uni1_fleets`, `uni1_fleet_event`, `uni1_log`, `uni1_log_fleets`, `uni1_messages`, `uni1_multi`, `uni1_news`, `uni1_notes`, `uni1_planets`, `uni1_raports`, `uni1_records`, `uni1_session`, `uni1_shortcuts`, `uni1_statpoints`, `uni1_ticket`, `uni1_ticket_answer`, `uni1_ticket_category`, `uni1_topkb`, `uni1_users`, `uni1_users_to_acs`, `uni1_users_to_extauth`, `uni1_users_to_topkb`, `uni1_users_valid`, `uni1_vars`, `uni1_vars_rapidfire`, `uni1_vars_requriements`");

echo "I na co sie qrwa gapisz!";

?>