# Project Title: InspectionFormApp

## Installation Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/bassantsayed97/InspectionFormApp.git

2. **Navigate to the Project Directory**
    cd inspection-form-app

3. **Install Dependencies**
    composer install

4. **Set Up Environment Variables** 
    cp .env.example .env

5. **Generate Application Key**
    php artisan key:generate

6. **Run Migrations**
    php artisan migrate

7. **Start the Development Server**
    php artisan serve

8. **run dev**
    npm i & npm run dev

9. **Open your browser and navigate to http://localhost:8000.**

    Approach and Thought Process
    Selection of the File: I chose the inspection parameters file due to its relevance to the application's core functionality of managing inspection data.
    Form Design: The web form includes fields such as inspection type, date, location, and inspector name. Each field is designed to capture essential data for the inspection process.
    Repository Pattern Implementation: I utilized the repository pattern to separate the data access logic from the application logic. This involved:
    Repositories: Created repositories for interacting with the database, which encapsulate the query logic and provide a clean API for data manipulation.
    Services: Implemented service classes that handle the business logic and coordinate between the repositories and controllers.
    User Experience Considerations: The form validation and error handling are implemented to ensure a smooth user experience, guiding users to fill out the form correctly.


## Database Schema Design

- **Table Name**: `inspection_forms`
  - **Fields**:
    - `id` (Primary Key, Auto Increment)
    - `work_order_no` (String): The unique identifier for the work order.
    - `customer_name` (String): The name of the customer.
    - `production_order_no` (String, Nullable): The production order number, if applicable.
    - `date` (Date, Nullable): The date of the inspection.
    - `project` (String, Nullable): The project name related to the inspection.
    - `quality_inspector` (String, Nullable): The name of the quality inspector responsible for the inspection.
    - `signature` (String, Nullable): This can store an e-signature or a file path for the inspector's signature.
    - `softDeletes` (Timestamp): Allows for soft deletion of records (not permanently deleting from the database).
    - `created_at` (Timestamp): The timestamp for when the record was created.
    - `updated_at` (Timestamp): The timestamp for when the record was last updated.

### Migration Code Example

Here is the migration code that creates the `inspection_forms` table:

```php
Schema::create('inspection_forms', function (Blueprint $table) {
    $table->id();
    $table->string('work_order_no');
    $table->string('customer_name');
    $table->string('production_order_no')->nullable();
    $table->date('date')->nullable();
    $table->string('project')->nullable();
    $table->string('quality_inspector')->nullable();
    $table->string('signature')->nullable(); // For e-signature or file path
    $table->softDeletes();
    $table->timestamps();
});






