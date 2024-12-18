<!DOCTYPE html>
<html>
<head>
    <title>Document Writer Section</title>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 28px;
}

h2 {
    font-size: 24px;
}

/* Document Writer Styles */
.document-writers-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two writers per row */
    gap: 20px;
}

.document-writer {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
}

.profile-picture img {
    max-width: 100px;
    max-height: 100px;
    border-radius: 50%;
    margin-right: 20px;
}

.writer-info {
    flex: 1;
}

/* Filter Styles */
.filter {
    margin-top: 20px;
    padding: 10px;
    background-color: #eee;
    border-radius: 5px;
}

/* Button Styles */
.book-appointment {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.book-appointment:hover {
    background-color: #555;
}

    </style>
</head>
<body>
    <header>
        <h1>Here you find the best document-writer</h1>
    </header>
    <main>
        <h2>Document Writers</h2>

        <!-- Filter Options -->
        <div class="filter">
            <label for="experienceFilter">Experience</label>
            <select id="experienceFilter">
                <option value="all">All</option>
                <option value="1">1 year</option>
                <option value="3">3 years</option>
                <option value="5">5 years</option>
                <option value="10">10 years</option>
            </select>

            <label for="serviceChargeFilter">Service Charge:</label>
            <select id="serviceChargeFilter">
                <option value="all">All</option>
                <option value="40">Less than ₹400 </option>
                <option value="50">Less than ₹1000</option>
                <option value="60">Less than ₹1500</option>
                <option value="60">Less than ₹2000</option>
            </select>

            <label for="documentWrittenFilter">Documents Written:</label>
            <select id="documentWrittenFilter">
                <option value="all">All</option>
                <option value="50">More than 50</option>
                <option value="100">More than 100</option>
                <option value="200">More than 200</option>
                <option value="200">More than 500</option>
            </select>

            <label for="ratingFilter">Rating:</label>
            <select id="ratingFilter">
                <option value="all">All</option>
                <option value="4">3.5+</option>
                <option value="4.5">4.0+</option>
                <option value="5">4.5</option>
                <option value="5">5.0</option>
            </select>
        </div>

        <!-- List of Document Writers (3x2 Grid) -->
        <div class="document-writers-grid">
            <!-- Document Writer 1 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/67c59487d42d0f8bc66e169d04c96044-1345304151695066172630/JPEG_20230919_004251_7157791010989421487.jpg" alt="Document Writer's Profile Picture">
                </div>
                <div class="writer-info">
                    <h3>Jayant Pathak</h3>
                    <p>Experience: 5 years</p>
                    <p>Documents Written: 100+</p>
                    <p>Rating: 4.5</p>
                    <p>Service Charge: ₹500 per document</p>
                    <p>City: Ahmedabad</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Document Writer 2 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/95e79ea7053b301d5d7545a0a50faf7c-1666172119724/d13ba2e9-c631-4b71-b6c5-7696090d8bb0.jpeg" alt="Document Writer's Profile Picture">
                </div>
                <div class="writer-info">
                    <h3>Harsh Yadav</h3>
                    <p>Experience: 3 years</p>
                    <p>Documents Written: 50+</p>
                    <p>Rating: 4.0</p>
                    <p>Service Charge: ₹1000 per document</p>
                    <p>City: Delhi</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Document Writer 3 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/6ca9e51347bd8e4a85a4cf67d23afc95-1692360306345/030457c1-eb33-43df-83f1-21cd7eadc672.jpg" alt="Document Writer's Profile Picture">
                </div>
                <div class="writer-info">
                    <h3>Raman Vyas</h3>
                    <p>Experience: 10 years</p>
                    <p>Documents Written: 200+</p>
                    <p>Rating: 4.9</p>
                    <p>Service Charge: ₹700 per document</p>
                    <p>City: Mumbai</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Add 3 more document writers here -->
            <!-- Document Writer 4 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/e24c479981a2af69864ef44f5e0839d2-1668660296960/e34aa63e-64eb-4b8a-a233-093bc4bdbf9d.jpeg" alt="Document Writer's Profile Picture">
                </div>
                <div class="writer-info">
                    <h3>Riya Patel</h3>
                    <p>Experience: 6 years</p>
                    <p>Documents Written: 200+</p>
                    <p>Rating: 4.4</p>
                    <p>Service Charge: ₹1500 per document</p>
                    <p>City: Pune</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Document Writer 5 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/dcd1d88030ef9fef301782c4f2fb51a2-1681504054749/8a5347d5-f7e3-450e-8ab1-7940bee5a46b.png" alt="Document Writer's Profile Picture">
                </div>
                <div class="writer-info">
                    <h3>Trupti Pandya</h3>
                    <p>Experience: 4 years</p>
                    <p>Documents Written: 50+</p>
                    <p>Rating: 3.9</p>
                    <p>Service Charge: ₹1300 per document</p>
                    <p>City: Bengaluru</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>

            <!-- Document Writer 6 -->
            <div class="document-writer">
                <div class="profile-picture">
                    <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/3539e0403774a6b86c56bc59b142ab80-1680585713656/fd70684a-fa78-49b6-aa7a-cda4e12255d6.jpeg" alt="Document Writer's Profile Picture">
                </div>
                <div class="writer-info">
                    <h3>Ritam Shah</h3>
                    <p>Experience: 5 years</p>
                    <p>Documents Written: 50+</p>
                    <p>Rating: 4.5</p>
                    <p>Service Charge: ₹800 per document</p>
                    <p>City: Surat</p>
                    <button class="book-appointment">Book Appointment</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- Add footer content here -->
    </footer>

    <script>
        // Filter document writers by experience, service charge, documents written, and rating
        document.getElementById('experienceFilter').addEventListener('change', filterWriters);
        document.getElementById('serviceChargeFilter').addEventListener('change', filterWriters);
        document.getElementById('documentWrittenFilter').addEventListener('change', filterWriters);
        document.getElementById('ratingFilter').addEventListener('change', filterWriters);

        function filterWriters() {
            const selectedExperience = parseInt(document.getElementById('experienceFilter').value);
            const selectedServiceCharge = parseInt(document.getElementById('serviceChargeFilter').value);
            const selectedDocumentWritten = parseInt(document.getElementById('documentWrittenFilter').value);
            const selectedRating = parseFloat(document.getElementById('ratingFilter').value);
            const writers = document.querySelectorAll('.document-writer');

            writers.forEach((writer) => {
                const writerExperience = parseInt(writer.querySelector('p:nth-child(2)').textContent.split(' ')[1]);
                const writerServiceCharge = parseInt(writer.querySelector('p:nth-child(5)').textContent.split(' ')[2]);
                const writerDocumentWritten = parseInt(writer.querySelector('p:nth-child(3)').textContent.split(' ')[2]);
                const writerRating = parseFloat(writer.querySelector('p:nth-child(4)').textContent.split(' ')[1]);

                const meetsExperience = (selectedExperience === 'all' || writerExperience >= selectedExperience);
                const meetsServiceCharge = (selectedServiceCharge === 'all' || writerServiceCharge <= selectedServiceCharge);
                const meetsDocumentWritten = (selectedDocumentWritten === 'all' || writerDocumentWritten >= selectedDocumentWritten);
                const meetsRating = (selectedRating === 'all' || writerRating >= selectedRating);

                if (meetsExperience && meetsServiceCharge && meetsDocumentWritten && meetsRating) {
                    writer.style.display = 'block';
                } else {
                    writer.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
