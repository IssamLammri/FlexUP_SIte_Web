<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190515130851 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE addresses DROP FOREIGN KEY addresses_ibfk_1');
        $this->addSql('ALTER TABLE addresses DROP FOREIGN KEY addresses_ibfk_2');
        $this->addSql('ALTER TABLE addresses ADD CONSTRAINT FK_6FCA7516744F713B FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE addresses ADD CONSTRAINT FK_6FCA75166E9059DF FOREIGN KEY (ID_User) REFERENCES users (ID_User)');
        $this->addSql('ALTER TABLE basket DROP FOREIGN KEY basket_ibfk_1');
        $this->addSql('ALTER TABLE basket DROP FOREIGN KEY basket_ibfk_2');
        $this->addSql('ALTER TABLE basket DROP FOREIGN KEY basket_ibfk_3');
        $this->addSql('ALTER TABLE basket CHANGE Is_Paid Is_Paid TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE basket ADD CONSTRAINT FK_2246507BD1C27E1E FOREIGN KEY (ID_Address) REFERENCES addresses (ID_Address)');
        $this->addSql('ALTER TABLE basket ADD CONSTRAINT FK_2246507B744F713B FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE basket ADD CONSTRAINT FK_2246507B6E9059DF FOREIGN KEY (ID_User) REFERENCES users (ID_User)');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY category_ibfk_1');
        $this->addSql('ALTER TABLE category CHANGE ID_Category_Parent ID_Category_Parent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C127B4D8DE FOREIGN KEY (ID_Category_Parent) REFERENCES category (ID_Category)');
        $this->addSql('ALTER TABLE file_client_orders DROP FOREIGN KEY file_client_orders_ibfk_1');
        $this->addSql('ALTER TABLE file_client_orders CHANGE ID_Type_File ID_Type_File INT DEFAULT NULL');
        $this->addSql('ALTER TABLE file_client_orders ADD CONSTRAINT FK_BD4742D867CB368D FOREIGN KEY (ID_Type_File) REFERENCES form_type (ID_Form_Type)');
        $this->addSql('ALTER TABLE file_proposal_group DROP FOREIGN KEY file_proposal_group_ibfk_1');
        $this->addSql('ALTER TABLE file_proposal_group CHANGE ID_Type_File ID_Type_File INT DEFAULT NULL');
        $this->addSql('ALTER TABLE file_proposal_group ADD CONSTRAINT FK_37E8343F67CB368D FOREIGN KEY (ID_Type_File) REFERENCES form_type (ID_Form_Type)');
        $this->addSql('ALTER TABLE form_type DROP FOREIGN KEY form_type_ibfk_1');
        $this->addSql('ALTER TABLE form_type CHANGE ID_Category ID_Category INT DEFAULT NULL');
        $this->addSql('ALTER TABLE form_type ADD CONSTRAINT FK_18FF533E66201B05 FOREIGN KEY (ID_Category) REFERENCES category (ID_Category)');
        $this->addSql('ALTER TABLE group_region DROP FOREIGN KEY group_region_ibfk_1');
        $this->addSql('ALTER TABLE group_region DROP FOREIGN KEY group_region_ibfk_2');
        $this->addSql('ALTER TABLE group_region CHANGE ID_Group ID_Group INT DEFAULT NULL, CHANGE ID_Region ID_Region INT DEFAULT NULL');
        $this->addSql('ALTER TABLE group_region ADD CONSTRAINT FK_DCE429A6744F713B FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE group_region ADD CONSTRAINT FK_DCE429A6557EA158 FOREIGN KEY (ID_Region) REFERENCES region (ID_Region)');
        $this->addSql('ALTER TABLE groups DROP FOREIGN KEY groups_ibfk_1');
        $this->addSql('ALTER TABLE groups DROP FOREIGN KEY groups_ibfk_2');
        $this->addSql('ALTER TABLE groups DROP FOREIGN KEY groups_ibfk_3');
        $this->addSql('ALTER TABLE groups CHANGE ID_Manager ID_Manager INT DEFAULT NULL');
        $this->addSql('ALTER TABLE groups ADD CONSTRAINT FK_F06D397026A83426 FOREIGN KEY (ID_Manager) REFERENCES users (ID_User)');
        $this->addSql('ALTER TABLE groups ADD CONSTRAINT FK_F06D397048E91738 FOREIGN KEY (ID_Main_Address) REFERENCES addresses (ID_Address)');
        $this->addSql('ALTER TABLE groups ADD CONSTRAINT FK_F06D3970906CD405 FOREIGN KEY (ID_Registered_Address) REFERENCES addresses (ID_Address)');
        $this->addSql('ALTER TABLE group_services_proposal DROP FOREIGN KEY group_services_proposal_ibfk_1');
        $this->addSql('ALTER TABLE group_services_proposal DROP FOREIGN KEY group_services_proposal_ibfk_2');
        $this->addSql('ALTER TABLE group_services_proposal DROP FOREIGN KEY group_services_proposal_ibfk_3');
        $this->addSql('ALTER TABLE group_services_proposal DROP FOREIGN KEY group_services_proposal_ibfk_4');
        $this->addSql('ALTER TABLE group_services_proposal CHANGE ID_Service ID_Service INT DEFAULT NULL, CHANGE ID_Group ID_Group INT DEFAULT NULL, CHANGE ID_Region ID_Region INT DEFAULT NULL, CHANGE ID_File ID_File INT DEFAULT NULL');
        $this->addSql('ALTER TABLE group_services_proposal ADD CONSTRAINT FK_4291273A6F9CB986 FOREIGN KEY (ID_File) REFERENCES file_proposal_group (ID_File_Proposal)');
        $this->addSql('ALTER TABLE group_services_proposal ADD CONSTRAINT FK_4291273A744F713B FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE group_services_proposal ADD CONSTRAINT FK_4291273A557EA158 FOREIGN KEY (ID_Region) REFERENCES region (ID_Region)');
        $this->addSql('ALTER TABLE group_services_proposal ADD CONSTRAINT FK_4291273A3D118B4D FOREIGN KEY (ID_Service) REFERENCES service (ID_Service)');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY orders_ibfk_3');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY orders_ibfk_4');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY orders_ibfk_5');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY orders_ibfk_6');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY orders_ibfk_7');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY orders_ibfk_8');
        $this->addSql('ALTER TABLE orders CHANGE ID_Group_V ID_Group_V INT DEFAULT NULL, CHANGE ID_Basket ID_Basket INT DEFAULT NULL, CHANGE ID_File ID_File INT DEFAULT NULL, CHANGE ID_Service ID_Service INT DEFAULT NULL, CHANGE ID_Region ID_Region INT DEFAULT NULL');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEE5427D78 FOREIGN KEY (ID_Group_V) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE798B1DA7 FOREIGN KEY (ID_Group_Purchased) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE557EA158 FOREIGN KEY (ID_Region) REFERENCES region (ID_Region)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE3D118B4D FOREIGN KEY (ID_Service) REFERENCES service (ID_Service)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE6E9059DF FOREIGN KEY (ID_User) REFERENCES users (ID_User)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE6F9CB986 FOREIGN KEY (ID_File) REFERENCES file_client_orders (ID_File_Client)');
        $this->addSql('ALTER TABLE orders_refused DROP FOREIGN KEY orders_refused_ibfk_1');
        $this->addSql('ALTER TABLE orders_refused DROP FOREIGN KEY orders_refused_ibfk_2');
        $this->addSql('ALTER TABLE orders_refused CHANGE ID_Order ID_Order INT DEFAULT NULL, CHANGE ID_Groupe ID_Groupe INT DEFAULT NULL');
        $this->addSql('ALTER TABLE orders_refused ADD CONSTRAINT FK_1A6CC075EA5DC0F FOREIGN KEY (ID_Groupe) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE orders_refused ADD CONSTRAINT FK_1A6CC07ECA6A666 FOREIGN KEY (ID_Order) REFERENCES orders (ID_Order)');
        $this->addSql('ALTER TABLE participants DROP FOREIGN KEY participants_ibfk_1');
        $this->addSql('ALTER TABLE participants DROP FOREIGN KEY participants_ibfk_2');
        $this->addSql('ALTER TABLE participants CHANGE ID_Group ID_Group INT DEFAULT NULL, CHANGE ID_User ID_User INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participants ADD CONSTRAINT FK_71697092744F713B FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE participants ADD CONSTRAINT FK_716970926E9059DF FOREIGN KEY (ID_User) REFERENCES users (ID_User)');
        $this->addSql('ALTER TABLE participants_groups DROP FOREIGN KEY participants_groups_ibfk_1');
        $this->addSql('ALTER TABLE participants_groups DROP FOREIGN KEY participants_groups_ibfk_2');
        $this->addSql('ALTER TABLE participants_groups CHANGE ID_Participant_G ID_Participant_G INT NOT NULL, CHANGE ID_Origin_Group ID_Origin_Group INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participants_groups ADD CONSTRAINT FK_3D8A66E26F2A5FE9 FOREIGN KEY (ID_Origin_Group) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE participants_groups ADD CONSTRAINT FK_3D8A66E28F57147B FOREIGN KEY (ID_Participant_G) REFERENCES groups (ID_Group)');
        $this->addSql('ALTER TABLE region CHANGE ID_Parent ID_Parent INT DEFAULT NULL');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY service_ibfk_1');
        $this->addSql('ALTER TABLE service CHANGE ID_Category ID_Category INT DEFAULT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD266201B05 FOREIGN KEY (ID_Category) REFERENCES category (ID_Category)');
        $this->addSql('ALTER TABLE service_region DROP FOREIGN KEY service_region_ibfk_1');
        $this->addSql('ALTER TABLE service_region DROP FOREIGN KEY service_region_ibfk_2');
        $this->addSql('ALTER TABLE service_region DROP FOREIGN KEY service_region_ibfk_3');
        $this->addSql('ALTER TABLE service_region CHANGE ID_Service ID_Service INT DEFAULT NULL, CHANGE ID_Region ID_Region INT DEFAULT NULL, CHANGE ID_File ID_File INT DEFAULT NULL');
        $this->addSql('ALTER TABLE service_region ADD CONSTRAINT FK_31A5F4406F9CB986 FOREIGN KEY (ID_File) REFERENCES file_proposal_group (ID_File_Proposal)');
        $this->addSql('ALTER TABLE service_region ADD CONSTRAINT FK_31A5F440557EA158 FOREIGN KEY (ID_Region) REFERENCES region (ID_Region)');
        $this->addSql('ALTER TABLE service_region ADD CONSTRAINT FK_31A5F4403D118B4D FOREIGN KEY (ID_Service) REFERENCES service (ID_Service)');
        $this->addSql('ALTER TABLE user_identify DROP FOREIGN KEY user_identify_ibfk_1');
        $this->addSql('ALTER TABLE user_identify DROP FOREIGN KEY user_identify_ibfk_2');
        $this->addSql('ALTER TABLE user_identify CHANGE ID_User ID_User INT DEFAULT NULL, CHANGE ID_Type_Identify ID_Type_Identify INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_identify ADD CONSTRAINT FK_F2EC7D17B44403CE FOREIGN KEY (ID_Type_Identify) REFERENCES type_identify_document (ID_Type_Identify)');
        $this->addSql('ALTER TABLE user_identify ADD CONSTRAINT FK_F2EC7D176E9059DF FOREIGN KEY (ID_User) REFERENCES users (ID_User)');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY users_ibfk_1');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY users_ibfk_2');
        $this->addSql('ALTER TABLE users CHANGE Is_Pro Is_Pro TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E948E91738 FOREIGN KEY (ID_Main_Address) REFERENCES addresses (ID_Address)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9C2B52B6E FOREIGN KEY (PID_Type) REFERENCES type_identify_document (ID_Type_Identify)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE addresses DROP FOREIGN KEY FK_6FCA7516744F713B');
        $this->addSql('ALTER TABLE addresses DROP FOREIGN KEY FK_6FCA75166E9059DF');
        $this->addSql('ALTER TABLE addresses ADD CONSTRAINT addresses_ibfk_1 FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE addresses ADD CONSTRAINT addresses_ibfk_2 FOREIGN KEY (ID_User) REFERENCES users (ID_User) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE basket DROP FOREIGN KEY FK_2246507BD1C27E1E');
        $this->addSql('ALTER TABLE basket DROP FOREIGN KEY FK_2246507B744F713B');
        $this->addSql('ALTER TABLE basket DROP FOREIGN KEY FK_2246507B6E9059DF');
        $this->addSql('ALTER TABLE basket CHANGE Is_Paid Is_Paid TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE basket ADD CONSTRAINT basket_ibfk_1 FOREIGN KEY (ID_Address) REFERENCES addresses (ID_Address) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE basket ADD CONSTRAINT basket_ibfk_2 FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE basket ADD CONSTRAINT basket_ibfk_3 FOREIGN KEY (ID_User) REFERENCES users (ID_User) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C127B4D8DE');
        $this->addSql('ALTER TABLE category CHANGE ID_Category_Parent ID_Category_Parent INT NOT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT category_ibfk_1 FOREIGN KEY (ID_Category_Parent) REFERENCES category (ID_Category) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE file_client_orders DROP FOREIGN KEY FK_BD4742D867CB368D');
        $this->addSql('ALTER TABLE file_client_orders CHANGE ID_Type_File ID_Type_File INT NOT NULL');
        $this->addSql('ALTER TABLE file_client_orders ADD CONSTRAINT file_client_orders_ibfk_1 FOREIGN KEY (ID_Type_File) REFERENCES form_type (ID_Form_Type) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE file_proposal_group DROP FOREIGN KEY FK_37E8343F67CB368D');
        $this->addSql('ALTER TABLE file_proposal_group CHANGE ID_Type_File ID_Type_File INT NOT NULL');
        $this->addSql('ALTER TABLE file_proposal_group ADD CONSTRAINT file_proposal_group_ibfk_1 FOREIGN KEY (ID_Type_File) REFERENCES form_type (ID_Form_Type) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE form_type DROP FOREIGN KEY FK_18FF533E66201B05');
        $this->addSql('ALTER TABLE form_type CHANGE ID_Category ID_Category INT NOT NULL');
        $this->addSql('ALTER TABLE form_type ADD CONSTRAINT form_type_ibfk_1 FOREIGN KEY (ID_Category) REFERENCES category (ID_Category) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE group_region DROP FOREIGN KEY FK_DCE429A6744F713B');
        $this->addSql('ALTER TABLE group_region DROP FOREIGN KEY FK_DCE429A6557EA158');
        $this->addSql('ALTER TABLE group_region CHANGE ID_Group ID_Group INT NOT NULL, CHANGE ID_Region ID_Region INT NOT NULL');
        $this->addSql('ALTER TABLE group_region ADD CONSTRAINT group_region_ibfk_1 FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE group_region ADD CONSTRAINT group_region_ibfk_2 FOREIGN KEY (ID_Region) REFERENCES region (ID_Region) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE group_services_proposal DROP FOREIGN KEY FK_4291273A6F9CB986');
        $this->addSql('ALTER TABLE group_services_proposal DROP FOREIGN KEY FK_4291273A744F713B');
        $this->addSql('ALTER TABLE group_services_proposal DROP FOREIGN KEY FK_4291273A557EA158');
        $this->addSql('ALTER TABLE group_services_proposal DROP FOREIGN KEY FK_4291273A3D118B4D');
        $this->addSql('ALTER TABLE group_services_proposal CHANGE ID_File ID_File INT NOT NULL, CHANGE ID_Group ID_Group INT NOT NULL, CHANGE ID_Region ID_Region INT NOT NULL, CHANGE ID_Service ID_Service INT NOT NULL');
        $this->addSql('ALTER TABLE group_services_proposal ADD CONSTRAINT group_services_proposal_ibfk_1 FOREIGN KEY (ID_File) REFERENCES file_proposal_group (ID_File_Proposal) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE group_services_proposal ADD CONSTRAINT group_services_proposal_ibfk_2 FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE group_services_proposal ADD CONSTRAINT group_services_proposal_ibfk_3 FOREIGN KEY (ID_Region) REFERENCES region (ID_Region) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE group_services_proposal ADD CONSTRAINT group_services_proposal_ibfk_4 FOREIGN KEY (ID_Service) REFERENCES service (ID_Service) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE groups DROP FOREIGN KEY FK_F06D397026A83426');
        $this->addSql('ALTER TABLE groups DROP FOREIGN KEY FK_F06D397048E91738');
        $this->addSql('ALTER TABLE groups DROP FOREIGN KEY FK_F06D3970906CD405');
        $this->addSql('ALTER TABLE groups CHANGE ID_Manager ID_Manager INT NOT NULL');
        $this->addSql('ALTER TABLE groups ADD CONSTRAINT groups_ibfk_1 FOREIGN KEY (ID_Manager) REFERENCES users (ID_User) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE groups ADD CONSTRAINT groups_ibfk_2 FOREIGN KEY (ID_Main_Address) REFERENCES addresses (ID_Address) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE groups ADD CONSTRAINT groups_ibfk_3 FOREIGN KEY (ID_Registered_Address) REFERENCES addresses (ID_Address) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEEE5427D78');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE798B1DA7');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE557EA158');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE3D118B4D');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE6E9059DF');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE6F9CB986');
        $this->addSql('ALTER TABLE orders CHANGE ID_Basket ID_Basket INT NOT NULL, CHANGE ID_Group_V ID_Group_V INT NOT NULL, CHANGE ID_Region ID_Region INT NOT NULL, CHANGE ID_Service ID_Service INT NOT NULL, CHANGE ID_File ID_File INT NOT NULL');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT orders_ibfk_3 FOREIGN KEY (ID_Group_V) REFERENCES groups (ID_Group) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT orders_ibfk_4 FOREIGN KEY (ID_Group_Purchased) REFERENCES groups (ID_Group) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT orders_ibfk_5 FOREIGN KEY (ID_Region) REFERENCES region (ID_Region) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT orders_ibfk_6 FOREIGN KEY (ID_Service) REFERENCES service (ID_Service) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT orders_ibfk_7 FOREIGN KEY (ID_User) REFERENCES users (ID_User) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT orders_ibfk_8 FOREIGN KEY (ID_File) REFERENCES file_client_orders (ID_File_Client) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE orders_refused DROP FOREIGN KEY FK_1A6CC075EA5DC0F');
        $this->addSql('ALTER TABLE orders_refused DROP FOREIGN KEY FK_1A6CC07ECA6A666');
        $this->addSql('ALTER TABLE orders_refused CHANGE ID_Groupe ID_Groupe INT NOT NULL, CHANGE ID_Order ID_Order INT NOT NULL');
        $this->addSql('ALTER TABLE orders_refused ADD CONSTRAINT orders_refused_ibfk_1 FOREIGN KEY (ID_Groupe) REFERENCES groups (ID_Group) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE orders_refused ADD CONSTRAINT orders_refused_ibfk_2 FOREIGN KEY (ID_Order) REFERENCES orders (ID_Order) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE participants DROP FOREIGN KEY FK_71697092744F713B');
        $this->addSql('ALTER TABLE participants DROP FOREIGN KEY FK_716970926E9059DF');
        $this->addSql('ALTER TABLE participants CHANGE ID_Group ID_Group INT NOT NULL, CHANGE ID_User ID_User INT NOT NULL');
        $this->addSql('ALTER TABLE participants ADD CONSTRAINT participants_ibfk_1 FOREIGN KEY (ID_Group) REFERENCES groups (ID_Group) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE participants ADD CONSTRAINT participants_ibfk_2 FOREIGN KEY (ID_User) REFERENCES users (ID_User) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE participants_groups DROP FOREIGN KEY FK_3D8A66E26F2A5FE9');
        $this->addSql('ALTER TABLE participants_groups DROP FOREIGN KEY FK_3D8A66E28F57147B');
        $this->addSql('ALTER TABLE participants_groups CHANGE ID_Origin_Group ID_Origin_Group INT NOT NULL, CHANGE ID_Participant_G ID_Participant_G INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE participants_groups ADD CONSTRAINT participants_groups_ibfk_1 FOREIGN KEY (ID_Origin_Group) REFERENCES groups (ID_Group) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE participants_groups ADD CONSTRAINT participants_groups_ibfk_2 FOREIGN KEY (ID_Participant_G) REFERENCES groups (ID_Group) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE region CHANGE ID_Parent ID_Parent INT NOT NULL');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD266201B05');
        $this->addSql('ALTER TABLE service CHANGE ID_Category ID_Category INT NOT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT service_ibfk_1 FOREIGN KEY (ID_Category) REFERENCES category (ID_Category) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE service_region DROP FOREIGN KEY FK_31A5F4406F9CB986');
        $this->addSql('ALTER TABLE service_region DROP FOREIGN KEY FK_31A5F440557EA158');
        $this->addSql('ALTER TABLE service_region DROP FOREIGN KEY FK_31A5F4403D118B4D');
        $this->addSql('ALTER TABLE service_region CHANGE ID_File ID_File INT NOT NULL, CHANGE ID_Region ID_Region INT NOT NULL, CHANGE ID_Service ID_Service INT NOT NULL');
        $this->addSql('ALTER TABLE service_region ADD CONSTRAINT service_region_ibfk_1 FOREIGN KEY (ID_File) REFERENCES file_proposal_group (ID_File_Proposal) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE service_region ADD CONSTRAINT service_region_ibfk_2 FOREIGN KEY (ID_Region) REFERENCES region (ID_Region) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE service_region ADD CONSTRAINT service_region_ibfk_3 FOREIGN KEY (ID_Service) REFERENCES service (ID_Service) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE user_identify DROP FOREIGN KEY FK_F2EC7D17B44403CE');
        $this->addSql('ALTER TABLE user_identify DROP FOREIGN KEY FK_F2EC7D176E9059DF');
        $this->addSql('ALTER TABLE user_identify CHANGE ID_Type_Identify ID_Type_Identify INT NOT NULL, CHANGE ID_User ID_User INT NOT NULL');
        $this->addSql('ALTER TABLE user_identify ADD CONSTRAINT user_identify_ibfk_1 FOREIGN KEY (ID_Type_Identify) REFERENCES type_identify_document (ID_Type_Identify) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE user_identify ADD CONSTRAINT user_identify_ibfk_2 FOREIGN KEY (ID_User) REFERENCES users (ID_User) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E948E91738');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9C2B52B6E');
        $this->addSql('ALTER TABLE users CHANGE Is_Pro Is_Pro TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT users_ibfk_1 FOREIGN KEY (ID_Main_Address) REFERENCES addresses (ID_Address) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT users_ibfk_2 FOREIGN KEY (PID_Type) REFERENCES type_identify_document (ID_Type_Identify) ON UPDATE CASCADE');
    }
}
