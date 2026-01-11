**Status:** Archival / Legacy (Built ~2014)

---

### 🛠 What’s inside?
A full-blown web dashboard to manage your dedicated server without touching the terminal:
* **Remote Control:** Boot or kill the server process via PHP.
 <img width="1906" height="927" alt="image" src="https://github.com/user-attachments/assets/1fb185ac-33cb-4949-a73b-1485c1b3090e" />
* **Config Management:** Real-time editing for `server.cfg` and `dedicated.cfg`.
* **Logs & Bans:** View chat logs, kick logs, and manage player blacklists.
 <img width="1919" height="952" alt="image" src="https://github.com/user-attachments/assets/391e8c56-9d27-4c2d-8253-c86688dd574e" />
* **Resources:** GSC script management and file editing.

### ⚠️ Important: Read this before installing
This code is over a decade old. It uses `mysql_connect`, which was removed in PHP 7. 
* **Environment:** You MUST use **PHP 5.6**. (XAMPP 5.6.40 is the easiest way on Windows).
* **Database:** It uses a standard MySQL structure. Import `sql.txt` via phpMyAdmin.
* **Fixing Errors:** If the import fails, change `TYPE=MyISAM` to `ENGINE=MyISAM` in your editor.

### 🚀 Quick Start
1. Drop the files into your `htdocs` folder.
2. Import the `sql.txt`.
3. Configure your database connection in `Functions/login.php` (or your config file).
4. Login with:
   - **User:** `Admin` | **Pass:** `r000t`
   - **User:** `root`  | **Pass:** `root`
  
### 🔗 Integrations
This panel is designed to work seamlessly with **[EDGAdmin-V3](https://github.com/Ehabsen/EDGAdmin-V3)**. 

While this WebPanel provides the browser-based UI and configuration tools, **EDGAdmin-V3** handles the core logic and server-side administration. For a full setup, you should deploy both.

### 📝 Note on Security
This panel was made in a different era. Use it behind a VPN or on a private local network. Do not expose this to the public internet without hardening the code first.
