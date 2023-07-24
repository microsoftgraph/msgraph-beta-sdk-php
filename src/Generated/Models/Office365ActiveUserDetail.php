<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Office365ActiveUserDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new office365ActiveUserDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Office365ActiveUserDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Office365ActiveUserDetail {
        return new Office365ActiveUserDetail();
    }

    /**
     * Gets the assignedProducts property value. All the products assigned for the user.
     * @return array<string>|null
    */
    public function getAssignedProducts(): ?array {
        $val = $this->getBackingStore()->get('assignedProducts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedProducts'");
    }

    /**
     * Gets the deletedDate property value. The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
     * @return Date|null
    */
    public function getDeletedDate(): ?Date {
        $val = $this->getBackingStore()->get('deletedDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedDate'");
    }

    /**
     * Gets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the exchangeLastActivityDate property value. The date when user last read or sent email.
     * @return Date|null
    */
    public function getExchangeLastActivityDate(): ?Date {
        $val = $this->getBackingStore()->get('exchangeLastActivityDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeLastActivityDate'");
    }

    /**
     * Gets the exchangeLicenseAssignDate property value. The last date when the user was assigned an Exchange license.
     * @return Date|null
    */
    public function getExchangeLicenseAssignDate(): ?Date {
        $val = $this->getBackingStore()->get('exchangeLicenseAssignDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeLicenseAssignDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedProducts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAssignedProducts($val);
            },
            'deletedDate' => fn(ParseNode $n) => $o->setDeletedDate($n->getDateValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'exchangeLastActivityDate' => fn(ParseNode $n) => $o->setExchangeLastActivityDate($n->getDateValue()),
            'exchangeLicenseAssignDate' => fn(ParseNode $n) => $o->setExchangeLicenseAssignDate($n->getDateValue()),
            'hasExchangeLicense' => fn(ParseNode $n) => $o->setHasExchangeLicense($n->getBooleanValue()),
            'hasOneDriveLicense' => fn(ParseNode $n) => $o->setHasOneDriveLicense($n->getBooleanValue()),
            'hasSharePointLicense' => fn(ParseNode $n) => $o->setHasSharePointLicense($n->getBooleanValue()),
            'hasSkypeForBusinessLicense' => fn(ParseNode $n) => $o->setHasSkypeForBusinessLicense($n->getBooleanValue()),
            'hasTeamsLicense' => fn(ParseNode $n) => $o->setHasTeamsLicense($n->getBooleanValue()),
            'hasYammerLicense' => fn(ParseNode $n) => $o->setHasYammerLicense($n->getBooleanValue()),
            'isDeleted' => fn(ParseNode $n) => $o->setIsDeleted($n->getBooleanValue()),
            'oneDriveLastActivityDate' => fn(ParseNode $n) => $o->setOneDriveLastActivityDate($n->getDateValue()),
            'oneDriveLicenseAssignDate' => fn(ParseNode $n) => $o->setOneDriveLicenseAssignDate($n->getDateValue()),
            'reportRefreshDate' => fn(ParseNode $n) => $o->setReportRefreshDate($n->getDateValue()),
            'sharePointLastActivityDate' => fn(ParseNode $n) => $o->setSharePointLastActivityDate($n->getDateValue()),
            'sharePointLicenseAssignDate' => fn(ParseNode $n) => $o->setSharePointLicenseAssignDate($n->getDateValue()),
            'skypeForBusinessLastActivityDate' => fn(ParseNode $n) => $o->setSkypeForBusinessLastActivityDate($n->getDateValue()),
            'skypeForBusinessLicenseAssignDate' => fn(ParseNode $n) => $o->setSkypeForBusinessLicenseAssignDate($n->getDateValue()),
            'teamsLastActivityDate' => fn(ParseNode $n) => $o->setTeamsLastActivityDate($n->getDateValue()),
            'teamsLicenseAssignDate' => fn(ParseNode $n) => $o->setTeamsLicenseAssignDate($n->getDateValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'yammerLastActivityDate' => fn(ParseNode $n) => $o->setYammerLastActivityDate($n->getDateValue()),
            'yammerLicenseAssignDate' => fn(ParseNode $n) => $o->setYammerLicenseAssignDate($n->getDateValue()),
        ]);
    }

    /**
     * Gets the hasExchangeLicense property value. Whether the user has been assigned an Exchange license.
     * @return bool|null
    */
    public function getHasExchangeLicense(): ?bool {
        $val = $this->getBackingStore()->get('hasExchangeLicense');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasExchangeLicense'");
    }

    /**
     * Gets the hasOneDriveLicense property value. Whether the user has been assigned a OneDrive license.
     * @return bool|null
    */
    public function getHasOneDriveLicense(): ?bool {
        $val = $this->getBackingStore()->get('hasOneDriveLicense');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasOneDriveLicense'");
    }

    /**
     * Gets the hasSharePointLicense property value. Whether the user has been assigned a SharePoint license.
     * @return bool|null
    */
    public function getHasSharePointLicense(): ?bool {
        $val = $this->getBackingStore()->get('hasSharePointLicense');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasSharePointLicense'");
    }

    /**
     * Gets the hasSkypeForBusinessLicense property value. Whether the user has been assigned a Skype For Business license.
     * @return bool|null
    */
    public function getHasSkypeForBusinessLicense(): ?bool {
        $val = $this->getBackingStore()->get('hasSkypeForBusinessLicense');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasSkypeForBusinessLicense'");
    }

    /**
     * Gets the hasTeamsLicense property value. Whether the user has been assigned a Teams license.
     * @return bool|null
    */
    public function getHasTeamsLicense(): ?bool {
        $val = $this->getBackingStore()->get('hasTeamsLicense');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasTeamsLicense'");
    }

    /**
     * Gets the hasYammerLicense property value. Whether the user has been assigned a Yammer license.
     * @return bool|null
    */
    public function getHasYammerLicense(): ?bool {
        $val = $this->getBackingStore()->get('hasYammerLicense');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasYammerLicense'");
    }

    /**
     * Gets the isDeleted property value. Whether this user has been deleted or soft deleted.
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        $val = $this->getBackingStore()->get('isDeleted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDeleted'");
    }

    /**
     * Gets the oneDriveLastActivityDate property value. The date when user last viewed or edited files, shared files internally or externally, or synced files.
     * @return Date|null
    */
    public function getOneDriveLastActivityDate(): ?Date {
        $val = $this->getBackingStore()->get('oneDriveLastActivityDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneDriveLastActivityDate'");
    }

    /**
     * Gets the oneDriveLicenseAssignDate property value. The last date when the user was assigned a OneDrive license.
     * @return Date|null
    */
    public function getOneDriveLicenseAssignDate(): ?Date {
        $val = $this->getBackingStore()->get('oneDriveLicenseAssignDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneDriveLicenseAssignDate'");
    }

    /**
     * Gets the reportRefreshDate property value. The latest date of the content.
     * @return Date|null
    */
    public function getReportRefreshDate(): ?Date {
        $val = $this->getBackingStore()->get('reportRefreshDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportRefreshDate'");
    }

    /**
     * Gets the sharePointLastActivityDate property value. The date when user last viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages.
     * @return Date|null
    */
    public function getSharePointLastActivityDate(): ?Date {
        $val = $this->getBackingStore()->get('sharePointLastActivityDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointLastActivityDate'");
    }

    /**
     * Gets the sharePointLicenseAssignDate property value. The last date when the user was assigned a SharePoint license.
     * @return Date|null
    */
    public function getSharePointLicenseAssignDate(): ?Date {
        $val = $this->getBackingStore()->get('sharePointLicenseAssignDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharePointLicenseAssignDate'");
    }

    /**
     * Gets the skypeForBusinessLastActivityDate property value. The date when user last organized or participated in conferences, or joined peer-to-peer sessions.
     * @return Date|null
    */
    public function getSkypeForBusinessLastActivityDate(): ?Date {
        $val = $this->getBackingStore()->get('skypeForBusinessLastActivityDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skypeForBusinessLastActivityDate'");
    }

    /**
     * Gets the skypeForBusinessLicenseAssignDate property value. The last date when the user was assigned a Skype For Business license.
     * @return Date|null
    */
    public function getSkypeForBusinessLicenseAssignDate(): ?Date {
        $val = $this->getBackingStore()->get('skypeForBusinessLicenseAssignDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skypeForBusinessLicenseAssignDate'");
    }

    /**
     * Gets the teamsLastActivityDate property value. The date when user last posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls.
     * @return Date|null
    */
    public function getTeamsLastActivityDate(): ?Date {
        $val = $this->getBackingStore()->get('teamsLastActivityDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsLastActivityDate'");
    }

    /**
     * Gets the teamsLicenseAssignDate property value. The last date when the user was assigned a Teams license.
     * @return Date|null
    */
    public function getTeamsLicenseAssignDate(): ?Date {
        $val = $this->getBackingStore()->get('teamsLicenseAssignDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsLicenseAssignDate'");
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the yammerLastActivityDate property value. The date when user last posted, read, or liked message.
     * @return Date|null
    */
    public function getYammerLastActivityDate(): ?Date {
        $val = $this->getBackingStore()->get('yammerLastActivityDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'yammerLastActivityDate'");
    }

    /**
     * Gets the yammerLicenseAssignDate property value. The last date when the user was assigned a Yammer license.
     * @return Date|null
    */
    public function getYammerLicenseAssignDate(): ?Date {
        $val = $this->getBackingStore()->get('yammerLicenseAssignDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'yammerLicenseAssignDate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('assignedProducts', $this->getAssignedProducts());
        $writer->writeDateValue('deletedDate', $this->getDeletedDate());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateValue('exchangeLastActivityDate', $this->getExchangeLastActivityDate());
        $writer->writeDateValue('exchangeLicenseAssignDate', $this->getExchangeLicenseAssignDate());
        $writer->writeBooleanValue('hasExchangeLicense', $this->getHasExchangeLicense());
        $writer->writeBooleanValue('hasOneDriveLicense', $this->getHasOneDriveLicense());
        $writer->writeBooleanValue('hasSharePointLicense', $this->getHasSharePointLicense());
        $writer->writeBooleanValue('hasSkypeForBusinessLicense', $this->getHasSkypeForBusinessLicense());
        $writer->writeBooleanValue('hasTeamsLicense', $this->getHasTeamsLicense());
        $writer->writeBooleanValue('hasYammerLicense', $this->getHasYammerLicense());
        $writer->writeBooleanValue('isDeleted', $this->getIsDeleted());
        $writer->writeDateValue('oneDriveLastActivityDate', $this->getOneDriveLastActivityDate());
        $writer->writeDateValue('oneDriveLicenseAssignDate', $this->getOneDriveLicenseAssignDate());
        $writer->writeDateValue('reportRefreshDate', $this->getReportRefreshDate());
        $writer->writeDateValue('sharePointLastActivityDate', $this->getSharePointLastActivityDate());
        $writer->writeDateValue('sharePointLicenseAssignDate', $this->getSharePointLicenseAssignDate());
        $writer->writeDateValue('skypeForBusinessLastActivityDate', $this->getSkypeForBusinessLastActivityDate());
        $writer->writeDateValue('skypeForBusinessLicenseAssignDate', $this->getSkypeForBusinessLicenseAssignDate());
        $writer->writeDateValue('teamsLastActivityDate', $this->getTeamsLastActivityDate());
        $writer->writeDateValue('teamsLicenseAssignDate', $this->getTeamsLicenseAssignDate());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeDateValue('yammerLastActivityDate', $this->getYammerLastActivityDate());
        $writer->writeDateValue('yammerLicenseAssignDate', $this->getYammerLicenseAssignDate());
    }

    /**
     * Sets the assignedProducts property value. All the products assigned for the user.
     * @param array<string>|null $value Value to set for the assignedProducts property.
    */
    public function setAssignedProducts(?array $value): void {
        $this->getBackingStore()->set('assignedProducts', $value);
    }

    /**
     * Sets the deletedDate property value. The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
     * @param Date|null $value Value to set for the deletedDate property.
    */
    public function setDeletedDate(?Date $value): void {
        $this->getBackingStore()->set('deletedDate', $value);
    }

    /**
     * Sets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the exchangeLastActivityDate property value. The date when user last read or sent email.
     * @param Date|null $value Value to set for the exchangeLastActivityDate property.
    */
    public function setExchangeLastActivityDate(?Date $value): void {
        $this->getBackingStore()->set('exchangeLastActivityDate', $value);
    }

    /**
     * Sets the exchangeLicenseAssignDate property value. The last date when the user was assigned an Exchange license.
     * @param Date|null $value Value to set for the exchangeLicenseAssignDate property.
    */
    public function setExchangeLicenseAssignDate(?Date $value): void {
        $this->getBackingStore()->set('exchangeLicenseAssignDate', $value);
    }

    /**
     * Sets the hasExchangeLicense property value. Whether the user has been assigned an Exchange license.
     * @param bool|null $value Value to set for the hasExchangeLicense property.
    */
    public function setHasExchangeLicense(?bool $value): void {
        $this->getBackingStore()->set('hasExchangeLicense', $value);
    }

    /**
     * Sets the hasOneDriveLicense property value. Whether the user has been assigned a OneDrive license.
     * @param bool|null $value Value to set for the hasOneDriveLicense property.
    */
    public function setHasOneDriveLicense(?bool $value): void {
        $this->getBackingStore()->set('hasOneDriveLicense', $value);
    }

    /**
     * Sets the hasSharePointLicense property value. Whether the user has been assigned a SharePoint license.
     * @param bool|null $value Value to set for the hasSharePointLicense property.
    */
    public function setHasSharePointLicense(?bool $value): void {
        $this->getBackingStore()->set('hasSharePointLicense', $value);
    }

    /**
     * Sets the hasSkypeForBusinessLicense property value. Whether the user has been assigned a Skype For Business license.
     * @param bool|null $value Value to set for the hasSkypeForBusinessLicense property.
    */
    public function setHasSkypeForBusinessLicense(?bool $value): void {
        $this->getBackingStore()->set('hasSkypeForBusinessLicense', $value);
    }

    /**
     * Sets the hasTeamsLicense property value. Whether the user has been assigned a Teams license.
     * @param bool|null $value Value to set for the hasTeamsLicense property.
    */
    public function setHasTeamsLicense(?bool $value): void {
        $this->getBackingStore()->set('hasTeamsLicense', $value);
    }

    /**
     * Sets the hasYammerLicense property value. Whether the user has been assigned a Yammer license.
     * @param bool|null $value Value to set for the hasYammerLicense property.
    */
    public function setHasYammerLicense(?bool $value): void {
        $this->getBackingStore()->set('hasYammerLicense', $value);
    }

    /**
     * Sets the isDeleted property value. Whether this user has been deleted or soft deleted.
     * @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value): void {
        $this->getBackingStore()->set('isDeleted', $value);
    }

    /**
     * Sets the oneDriveLastActivityDate property value. The date when user last viewed or edited files, shared files internally or externally, or synced files.
     * @param Date|null $value Value to set for the oneDriveLastActivityDate property.
    */
    public function setOneDriveLastActivityDate(?Date $value): void {
        $this->getBackingStore()->set('oneDriveLastActivityDate', $value);
    }

    /**
     * Sets the oneDriveLicenseAssignDate property value. The last date when the user was assigned a OneDrive license.
     * @param Date|null $value Value to set for the oneDriveLicenseAssignDate property.
    */
    public function setOneDriveLicenseAssignDate(?Date $value): void {
        $this->getBackingStore()->set('oneDriveLicenseAssignDate', $value);
    }

    /**
     * Sets the reportRefreshDate property value. The latest date of the content.
     * @param Date|null $value Value to set for the reportRefreshDate property.
    */
    public function setReportRefreshDate(?Date $value): void {
        $this->getBackingStore()->set('reportRefreshDate', $value);
    }

    /**
     * Sets the sharePointLastActivityDate property value. The date when user last viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages.
     * @param Date|null $value Value to set for the sharePointLastActivityDate property.
    */
    public function setSharePointLastActivityDate(?Date $value): void {
        $this->getBackingStore()->set('sharePointLastActivityDate', $value);
    }

    /**
     * Sets the sharePointLicenseAssignDate property value. The last date when the user was assigned a SharePoint license.
     * @param Date|null $value Value to set for the sharePointLicenseAssignDate property.
    */
    public function setSharePointLicenseAssignDate(?Date $value): void {
        $this->getBackingStore()->set('sharePointLicenseAssignDate', $value);
    }

    /**
     * Sets the skypeForBusinessLastActivityDate property value. The date when user last organized or participated in conferences, or joined peer-to-peer sessions.
     * @param Date|null $value Value to set for the skypeForBusinessLastActivityDate property.
    */
    public function setSkypeForBusinessLastActivityDate(?Date $value): void {
        $this->getBackingStore()->set('skypeForBusinessLastActivityDate', $value);
    }

    /**
     * Sets the skypeForBusinessLicenseAssignDate property value. The last date when the user was assigned a Skype For Business license.
     * @param Date|null $value Value to set for the skypeForBusinessLicenseAssignDate property.
    */
    public function setSkypeForBusinessLicenseAssignDate(?Date $value): void {
        $this->getBackingStore()->set('skypeForBusinessLicenseAssignDate', $value);
    }

    /**
     * Sets the teamsLastActivityDate property value. The date when user last posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls.
     * @param Date|null $value Value to set for the teamsLastActivityDate property.
    */
    public function setTeamsLastActivityDate(?Date $value): void {
        $this->getBackingStore()->set('teamsLastActivityDate', $value);
    }

    /**
     * Sets the teamsLicenseAssignDate property value. The last date when the user was assigned a Teams license.
     * @param Date|null $value Value to set for the teamsLicenseAssignDate property.
    */
    public function setTeamsLicenseAssignDate(?Date $value): void {
        $this->getBackingStore()->set('teamsLicenseAssignDate', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the yammerLastActivityDate property value. The date when user last posted, read, or liked message.
     * @param Date|null $value Value to set for the yammerLastActivityDate property.
    */
    public function setYammerLastActivityDate(?Date $value): void {
        $this->getBackingStore()->set('yammerLastActivityDate', $value);
    }

    /**
     * Sets the yammerLicenseAssignDate property value. The last date when the user was assigned a Yammer license.
     * @param Date|null $value Value to set for the yammerLicenseAssignDate property.
    */
    public function setYammerLicenseAssignDate(?Date $value): void {
        $this->getBackingStore()->set('yammerLicenseAssignDate', $value);
    }

}
