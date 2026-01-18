DROP DATABASE IF EXISTS "jibk2.0";
CREATE DATABASE "jibk2.0";

DROP TABLE IF EXISTS users CASCADE;
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);


DROP TABLE IF EXISTS cards CASCADE;
CREATE TABLE cards (
    id SERIAL PRIMARY KEY,
    bank VARCHAR(25) NOT NULL,
    type VARCHAR(10)
        CHECK (type IN ('mastercard', 'visa')),
    is_main BOOLEAN NOT NULL DEFAULT FALSE,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE
);

DROP TABLE IF EXISTS expenses_categories CASCADE;
CREATE TABLE expenses_categories (
    id SERIAL PRIMARY KEY,
    name VARCHAR(25) NOT NULL UNIQUE
);

DROP TABLE IF EXISTS incomes_categories CASCADE;
CREATE TABLE incomes_categories (
    id SERIAL PRIMARY KEY,
    name VARCHAR(25) NOT NULL UNIQUE
);

DROP TABLE IF EXISTS expenses CASCADE;
CREATE TABLE expenses (
    id SERIAL PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    description TEXT DEFAULT NULL,
    date DATE DEFAULT CURRENT_DATE,
    card_id INT NOT NULL,
    category_id INT DEFAULT NULL,
    FOREIGN KEY (card_id)
        REFERENCES cards(id)
        ON DELETE CASCADE,
    FOREIGN KEY (category_id)
        REFERENCES expenses_categories(id)
        ON DELETE SET NULL
);

DROP TABLE IF EXISTS incomes CASCADE;
CREATE TABLE incomes (
    id SERIAL PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    description TEXT DEFAULT NULL,
    date DATE DEFAULT CURRENT_DATE,
    card_id INT NOT NULL,
    category_id INT DEFAULT NULL,
    FOREIGN KEY (card_id)
        REFERENCES cards(id)
        ON DELETE CASCADE,
    FOREIGN KEY (category_id)
        REFERENCES incomes_categories(id)
        ON DELETE SET NULL
);

-- INCOME CATEGORIES DATA
INSERT INTO incomes_categories (id, name) VALUES
(1, 'Salary'),
(2, 'Hourly Wages'),
(3, 'Freelance / Contract'),
(4, 'Business Income'),
(5, 'Bonuses'),
(6, 'Commissions'),
(8, 'Dividends'),
(9, 'Interest'),
(10, 'Rental Income'),
(12, 'Government Benefits'),
(13, 'Pension'),
(15, 'Refunds'),
(16, 'Side Hustle'),
(17, 'Other Income');

-- EXPENSE CATEGORIES DATA
INSERT INTO expenses_categories (id, name) VALUES
(1, 'Housing'),
(2, 'Rent'),
(3, 'Mortgage'),
(5, 'Electricity'),
(6, 'Water'),
(7, 'Internet'),
(8, 'Mobile Phone'),
(10, 'Groceries'),
(11, 'Dining Out'),
(12, 'Transportation'),
(14, 'Public Transport'),
(15, 'Vehicle Maintenance'),
(16, 'Insurance'),
(17, 'Health Insurance'),
(18, 'Medical Expenses'),
(19, 'Education'),
(21, 'Books & Supplies'),
(22, 'Entertainment'),
(24, 'Travel'),
(25, 'Clothing'),
(26, 'Personal Care'),
(27, 'Fitness'),
(28, 'Savings'),
(30, 'Debt Repayment'),
(31, 'Credit Card Payment'),
(32, 'Loans'),
(33, 'Donations'),
(34, 'Gifts'),
(35, 'Childcare'),
(37, 'Other Expenses');