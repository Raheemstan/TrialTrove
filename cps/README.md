# Car Park Space Management System

## User Persona

Amanda, a Car Park Manager

## User Story

As a car park manager, I want to efficiently manage parking spaces within the car park to ensure optimal utilization, streamline user experience, and enhance overall parking operations.

## Acceptance Criteria

1. **Space Allocation:**

   - As a manager, I want the ability to allocate parking spaces to different categories (standard, handicapped, reserved) based on user needs and regulations.
2. **Real-Time Space Availability:**

   - I want to view and track real-time information on the availability of parking spaces within the car park, enabling quick decision-making and efficient space allocation.
3. **Dynamic Schematic Representation:**

   - The system should provide a dynamic schematic representation of the car park layout, allowing for easy visualization of space occupancy and types.
4. **Space Status Updates:**

   - Users and attendants should be able to update the status of parking spaces in real time, marking spaces as occupied or vacant.
5. **Reservation Integration:**

   - The system should integrate with the reservation module, allowing users to reserve parking spaces in advance, and updating the status of reserved spaces upon arrival.
6. **User-Friendly Interface:**

   - The space management interface should be user-friendly, providing an intuitive way to interact with the schematic and make quick updates.
7. **Color-Coding and Labels:**

   - Differentiate between types of parking spaces through color-coding and labels on the schematic for easy identification (standard, handicapped, reserved).
8. **Alerts for Full Capacity:**

   - Receive alerts when the car park reaches full capacity, enabling proactive measures such as redirecting users to nearby parking options.
9. **History and Analytics:**

   - Maintain a historical record of space occupancy and user patterns for analysis, facilitating data-driven decisions for future space management strategies.
10. **Integration with Payment System:**

    - Integrate with the payment module to track paid and unpaid parking spaces, automating the process of marking spaces as paid upon successful transactions.
11. **Security Measures:**

    - Implement security features to restrict unauthorized access to the space management system and ensure the integrity of parking space data.
12. **Space Maintenance Tracking:**

    - Enable the tracking of maintenance activities related to parking spaces, ensuring that spaces are well-maintained and available for use.

---

A car park booking software system typically consists of various modules that handle different aspects of parking management. Here's an outline of the database and schema for key modules within a Car Park Booking software system:

1. **User Management:**

   - **Users Table:**
     - UserID (Primary Key)
     - Username
     - Password (hashed and salted)
     - Email
     - Contact Information
     - Role (User, Admin, Operator, etc.)
2. **Car Park Information:**

   - **CarParks Table:**
     - CarParkID (Primary Key)
     - Car Park Name
     - Location
     - Maximum Capacity
     - Operator (Foreign Key to Users)
3. **Booking Management:**

   - **Bookings Table:**
     - BookingID (Primary Key)
     - UserID (Foreign Key)
     - CarParkID (Foreign Key)
     - Booking Date and Time
     - Entry Date and Time
     - Exit Date and Time
     - Payment Status
     - Booking Status (Active, Canceled, Completed)
4. **Space Management:**

   - **Spaces Table:**
     - SpaceID (Primary Key)
     - CarParkID (Foreign Key)
     - Space Number
     - Space Type (Standard, Handicapped, Reserved, etc.)
     - Status (Occupied, Available)
     - Rate
5. **Payment Records:**

   - **Payments Table:**
     - PaymentID (Primary Key)
     - BookingID (Foreign Key)
     - Amount
     - Payment Date and Time
     - Payment Method (Credit Card, Mobile Payment, etc.)
6. **Schematic Representation:**

   - **Schematic Table:**
     - SchematicID (Primary Key)
     - CarParkID (Foreign Key)
     - Schematic Image (Link or Binary Data)
     - Space Coordinates and Status
     - Labels and Color-Coding
7. **Cancellation and Refunds:**

   - **Cancellations Table:**
     - CancellationID (Primary Key)
     - BookingID (Foreign Key)
     - Cancellation Date and Time
     - Refund Amount
     - Cancellation Reason
8. **Feedback and Support:**

   - **Feedback Table:**
     - FeedbackID (Primary Key)
     - UserID (Foreign Key)
     - Subject
     - Message
     - Timestamp
     - Status (Open, In Progress, Closed)
9. **Notifications and Alerts:**`<p align="center"><a href="https://laravel.com" target="_blank">``<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>``</p>`
