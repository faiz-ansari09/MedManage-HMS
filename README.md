# 📌 MedManage: Hospital Management System

A web-based Hospital Management System (HMS) designed to streamline hospital operations such as patient registration, doctor management, and appointment scheduling. The system provides both frontend (UI for patients, doctors, admins) and backend (PHP-driven logic, authentication, database interaction) functionalities.

---

## 🚀 Features

- 👩‍⚕ Patient Management – Registration, login, profile, medical records.

- 🧑‍⚕ Doctor Management – Doctor dashboard, charts, schedule management.

- 📅 Appointments – Schedule and manage patient appointments.

- 🔒 Authentication – Secure login, registration, password management.

- 📊 Analytics Dashboard – Charts for doctors/patients using ApexCharts.

- 📑 Reports – Export/print in PDF format.

---

## 📂 Project Structure

```
MedManage-HMS/
│── backend/                # Server-side PHP logic & APIs
│   ├── include/            # PHP reusable components
│   │   ├── footer.php
│   │   ├── head.php
│   │   ├── header.php
│   │   ├── script.php
│   │   └── sidebar.php
│   ├── assets/                 # Shared static files
│   │   ├── css/                # Stylesheets
│   │   ├── images/             # Image assets
│   │   ├── js/                 # JavaScript files
│   │   ├── pdf/                # Exported PDF files
│   │   ├── pug/pages/template/ # Template files
│   │   └── svg/                # SVG icons
│   ├── addproduct.php
│   ├── changepassword.php
│   ├── dashboard.php
│   ├── insertaddproduct.php
│   ├── insertlogin.php
│   ├── insertpassword.php
│   ├── insertreg.php
│   ├── inserttest.php
│   ├── login.php
│   ├── master.php
│   ├── order.php
│   ├── registration.php
│   ├── showproduct.php
│   └── test.php
│── frontend/               # Frontend layouts
│   └── layouts/
│       ├── assets/
│       │   ├── css/        # Frontend styles
│       │   ├── images/     # Frontend images
│       │   ├── js/         # Frontend scripts
│       │   │   ├── app.js
│       │   │   ├── ckeditor.js
│       │   │   ├── contact.js
│       │   │   ├── doctor-apexchart.init.js
│       │   │   ├── easy_background.js
│       │   │   ├── fullcalendar.init.js
│       │   │   ├── patient-apexchart.init.js
│       │   │   └── plugins.init.js
│       │   └── libs/                   # External libraries
│       └── landing/                # Landing page files
│── LICENSE
└── README.md
```

---

## 🛠 Tech Stack

*Frontend:*

- HTML5, CSS3, JavaScript (Vanilla JS + plugins)

- Charts: ApexCharts

- Calendar: FullCalendar

- Rich text editor: CKEditor


*Backend:*

- PHP (Core PHP, includes authentication & CRUD)

- MySQL (Database)


*Other Tools:*

- PUG Templates

- PDF Generation

- External JS Libraries

---

## ⚙ Installation & Setup

 **Clone the repository**
   ```bash
   git clone https://github.com/faiz-ansari09/MedManage-HMS
   ```
   **Navigate to project folder**
   ```bash
   cd MedManage-HMS
   ```

---

## Contributing

Contributions are welcome! Please open issues or submit pull requests for improvements.

---

## License

This project is licensed under the [MIT License](https://github.com/faiz-ansari09/MedManage-HMS/blob/main/LICENSE)

---

## Contact

For any questions or feedback, please reach out to us at ansarifaiz0905@gmail.com.

Thank you for choosing MedManage. Happy tracking! 🚀