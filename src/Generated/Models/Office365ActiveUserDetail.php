<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365ActiveUserDetail extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $assignedProducts All the products assigned for the user.
    */
    private ?array $assignedProducts = null;
    
    /**
     * @var Date|null $deletedDate The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
    */
    private ?Date $deletedDate = null;
    
    /**
     * @var string|null $displayName The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates.
    */
    private ?string $displayName = null;
    
    /**
     * @var Date|null $exchangeLastActivityDate The date when user last read or sent email.
    */
    private ?Date $exchangeLastActivityDate = null;
    
    /**
     * @var Date|null $exchangeLicenseAssignDate The last date when the user was assigned an Exchange license.
    */
    private ?Date $exchangeLicenseAssignDate = null;
    
    /**
     * @var bool|null $hasExchangeLicense Whether the user has been assigned an Exchange license.
    */
    private ?bool $hasExchangeLicense = null;
    
    /**
     * @var bool|null $hasOneDriveLicense Whether the user has been assigned a OneDrive license.
    */
    private ?bool $hasOneDriveLicense = null;
    
    /**
     * @var bool|null $hasSharePointLicense Whether the user has been assigned a SharePoint license.
    */
    private ?bool $hasSharePointLicense = null;
    
    /**
     * @var bool|null $hasSkypeForBusinessLicense Whether the user has been assigned a Skype For Business license.
    */
    private ?bool $hasSkypeForBusinessLicense = null;
    
    /**
     * @var bool|null $hasTeamsLicense Whether the user has been assigned a Teams license.
    */
    private ?bool $hasTeamsLicense = null;
    
    /**
     * @var bool|null $hasYammerLicense Whether the user has been assigned a Yammer license.
    */
    private ?bool $hasYammerLicense = null;
    
    /**
     * @var bool|null $isDeleted Whether this user has been deleted or soft deleted.
    */
    private ?bool $isDeleted = null;
    
    /**
     * @var Date|null $oneDriveLastActivityDate The date when user last viewed or edited files, shared files internally or externally, or synced files.
    */
    private ?Date $oneDriveLastActivityDate = null;
    
    /**
     * @var Date|null $oneDriveLicenseAssignDate The last date when the user was assigned a OneDrive license.
    */
    private ?Date $oneDriveLicenseAssignDate = null;
    
    /**
     * @var Date|null $reportRefreshDate The latest date of the content.
    */
    private ?Date $reportRefreshDate = null;
    
    /**
     * @var Date|null $sharePointLastActivityDate The date when user last viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages.
    */
    private ?Date $sharePointLastActivityDate = null;
    
    /**
     * @var Date|null $sharePointLicenseAssignDate The last date when the user was assigned a SharePoint license.
    */
    private ?Date $sharePointLicenseAssignDate = null;
    
    /**
     * @var Date|null $skypeForBusinessLastActivityDate The date when user last organized or participated in conferences, or joined peer-to-peer sessions.
    */
    private ?Date $skypeForBusinessLastActivityDate = null;
    
    /**
     * @var Date|null $skypeForBusinessLicenseAssignDate The last date when the user was assigned a Skype For Business license.
    */
    private ?Date $skypeForBusinessLicenseAssignDate = null;
    
    /**
     * @var Date|null $teamsLastActivityDate The date when user last posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls.
    */
    private ?Date $teamsLastActivityDate = null;
    
    /**
     * @var Date|null $teamsLicenseAssignDate The last date when the user was assigned a Teams license.
    */
    private ?Date $teamsLicenseAssignDate = null;
    
    /**
     * @var string|null $userPrincipalName The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var Date|null $yammerLastActivityDate The date when user last posted, read, or liked message.
    */
    private ?Date $yammerLastActivityDate = null;
    
    /**
     * @var Date|null $yammerLicenseAssignDate The last date when the user was assigned a Yammer license.
    */
    private ?Date $yammerLicenseAssignDate = null;
    
    /**
     * Instantiates a new Office365ActiveUserDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.office365ActiveUserDetail');
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
        return $this->assignedProducts;
    }

    /**
     * Gets the deletedDate property value. The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
     * @return Date|null
    */
    public function getDeletedDate(): ?Date {
        return $this->deletedDate;
    }

    /**
     * Gets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the exchangeLastActivityDate property value. The date when user last read or sent email.
     * @return Date|null
    */
    public function getExchangeLastActivityDate(): ?Date {
        return $this->exchangeLastActivityDate;
    }

    /**
     * Gets the exchangeLicenseAssignDate property value. The last date when the user was assigned an Exchange license.
     * @return Date|null
    */
    public function getExchangeLicenseAssignDate(): ?Date {
        return $this->exchangeLicenseAssignDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedProducts' => fn(ParseNode $n) => $o->setAssignedProducts($n->getCollectionOfPrimitiveValues()),
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
        return $this->hasExchangeLicense;
    }

    /**
     * Gets the hasOneDriveLicense property value. Whether the user has been assigned a OneDrive license.
     * @return bool|null
    */
    public function getHasOneDriveLicense(): ?bool {
        return $this->hasOneDriveLicense;
    }

    /**
     * Gets the hasSharePointLicense property value. Whether the user has been assigned a SharePoint license.
     * @return bool|null
    */
    public function getHasSharePointLicense(): ?bool {
        return $this->hasSharePointLicense;
    }

    /**
     * Gets the hasSkypeForBusinessLicense property value. Whether the user has been assigned a Skype For Business license.
     * @return bool|null
    */
    public function getHasSkypeForBusinessLicense(): ?bool {
        return $this->hasSkypeForBusinessLicense;
    }

    /**
     * Gets the hasTeamsLicense property value. Whether the user has been assigned a Teams license.
     * @return bool|null
    */
    public function getHasTeamsLicense(): ?bool {
        return $this->hasTeamsLicense;
    }

    /**
     * Gets the hasYammerLicense property value. Whether the user has been assigned a Yammer license.
     * @return bool|null
    */
    public function getHasYammerLicense(): ?bool {
        return $this->hasYammerLicense;
    }

    /**
     * Gets the isDeleted property value. Whether this user has been deleted or soft deleted.
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        return $this->isDeleted;
    }

    /**
     * Gets the oneDriveLastActivityDate property value. The date when user last viewed or edited files, shared files internally or externally, or synced files.
     * @return Date|null
    */
    public function getOneDriveLastActivityDate(): ?Date {
        return $this->oneDriveLastActivityDate;
    }

    /**
     * Gets the oneDriveLicenseAssignDate property value. The last date when the user was assigned a OneDrive license.
     * @return Date|null
    */
    public function getOneDriveLicenseAssignDate(): ?Date {
        return $this->oneDriveLicenseAssignDate;
    }

    /**
     * Gets the reportRefreshDate property value. The latest date of the content.
     * @return Date|null
    */
    public function getReportRefreshDate(): ?Date {
        return $this->reportRefreshDate;
    }

    /**
     * Gets the sharePointLastActivityDate property value. The date when user last viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages.
     * @return Date|null
    */
    public function getSharePointLastActivityDate(): ?Date {
        return $this->sharePointLastActivityDate;
    }

    /**
     * Gets the sharePointLicenseAssignDate property value. The last date when the user was assigned a SharePoint license.
     * @return Date|null
    */
    public function getSharePointLicenseAssignDate(): ?Date {
        return $this->sharePointLicenseAssignDate;
    }

    /**
     * Gets the skypeForBusinessLastActivityDate property value. The date when user last organized or participated in conferences, or joined peer-to-peer sessions.
     * @return Date|null
    */
    public function getSkypeForBusinessLastActivityDate(): ?Date {
        return $this->skypeForBusinessLastActivityDate;
    }

    /**
     * Gets the skypeForBusinessLicenseAssignDate property value. The last date when the user was assigned a Skype For Business license.
     * @return Date|null
    */
    public function getSkypeForBusinessLicenseAssignDate(): ?Date {
        return $this->skypeForBusinessLicenseAssignDate;
    }

    /**
     * Gets the teamsLastActivityDate property value. The date when user last posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls.
     * @return Date|null
    */
    public function getTeamsLastActivityDate(): ?Date {
        return $this->teamsLastActivityDate;
    }

    /**
     * Gets the teamsLicenseAssignDate property value. The last date when the user was assigned a Teams license.
     * @return Date|null
    */
    public function getTeamsLicenseAssignDate(): ?Date {
        return $this->teamsLicenseAssignDate;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the yammerLastActivityDate property value. The date when user last posted, read, or liked message.
     * @return Date|null
    */
    public function getYammerLastActivityDate(): ?Date {
        return $this->yammerLastActivityDate;
    }

    /**
     * Gets the yammerLicenseAssignDate property value. The last date when the user was assigned a Yammer license.
     * @return Date|null
    */
    public function getYammerLicenseAssignDate(): ?Date {
        return $this->yammerLicenseAssignDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('assignedProducts', $this->assignedProducts);
        $writer->writeDateValue('deletedDate', $this->deletedDate);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateValue('exchangeLastActivityDate', $this->exchangeLastActivityDate);
        $writer->writeDateValue('exchangeLicenseAssignDate', $this->exchangeLicenseAssignDate);
        $writer->writeBooleanValue('hasExchangeLicense', $this->hasExchangeLicense);
        $writer->writeBooleanValue('hasOneDriveLicense', $this->hasOneDriveLicense);
        $writer->writeBooleanValue('hasSharePointLicense', $this->hasSharePointLicense);
        $writer->writeBooleanValue('hasSkypeForBusinessLicense', $this->hasSkypeForBusinessLicense);
        $writer->writeBooleanValue('hasTeamsLicense', $this->hasTeamsLicense);
        $writer->writeBooleanValue('hasYammerLicense', $this->hasYammerLicense);
        $writer->writeBooleanValue('isDeleted', $this->isDeleted);
        $writer->writeDateValue('oneDriveLastActivityDate', $this->oneDriveLastActivityDate);
        $writer->writeDateValue('oneDriveLicenseAssignDate', $this->oneDriveLicenseAssignDate);
        $writer->writeDateValue('reportRefreshDate', $this->reportRefreshDate);
        $writer->writeDateValue('sharePointLastActivityDate', $this->sharePointLastActivityDate);
        $writer->writeDateValue('sharePointLicenseAssignDate', $this->sharePointLicenseAssignDate);
        $writer->writeDateValue('skypeForBusinessLastActivityDate', $this->skypeForBusinessLastActivityDate);
        $writer->writeDateValue('skypeForBusinessLicenseAssignDate', $this->skypeForBusinessLicenseAssignDate);
        $writer->writeDateValue('teamsLastActivityDate', $this->teamsLastActivityDate);
        $writer->writeDateValue('teamsLicenseAssignDate', $this->teamsLicenseAssignDate);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeDateValue('yammerLastActivityDate', $this->yammerLastActivityDate);
        $writer->writeDateValue('yammerLicenseAssignDate', $this->yammerLicenseAssignDate);
    }

    /**
     * Sets the assignedProducts property value. All the products assigned for the user.
     *  @param array<string>|null $value Value to set for the assignedProducts property.
    */
    public function setAssignedProducts(?array $value ): void {
        $this->assignedProducts = $value;
    }

    /**
     * Sets the deletedDate property value. The date when the delete operation happened. Default value is 'null' when the user has not been deleted.
     *  @param Date|null $value Value to set for the deletedDate property.
    */
    public function setDeletedDate(?Date $value ): void {
        $this->deletedDate = $value;
    }

    /**
     * Sets the displayName property value. The name displayed in the address book for the user. This is usually the combination of the user's first name, middle initial, and last name. This property is required when a user is created and it cannot be cleared during updates.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the exchangeLastActivityDate property value. The date when user last read or sent email.
     *  @param Date|null $value Value to set for the exchangeLastActivityDate property.
    */
    public function setExchangeLastActivityDate(?Date $value ): void {
        $this->exchangeLastActivityDate = $value;
    }

    /**
     * Sets the exchangeLicenseAssignDate property value. The last date when the user was assigned an Exchange license.
     *  @param Date|null $value Value to set for the exchangeLicenseAssignDate property.
    */
    public function setExchangeLicenseAssignDate(?Date $value ): void {
        $this->exchangeLicenseAssignDate = $value;
    }

    /**
     * Sets the hasExchangeLicense property value. Whether the user has been assigned an Exchange license.
     *  @param bool|null $value Value to set for the hasExchangeLicense property.
    */
    public function setHasExchangeLicense(?bool $value ): void {
        $this->hasExchangeLicense = $value;
    }

    /**
     * Sets the hasOneDriveLicense property value. Whether the user has been assigned a OneDrive license.
     *  @param bool|null $value Value to set for the hasOneDriveLicense property.
    */
    public function setHasOneDriveLicense(?bool $value ): void {
        $this->hasOneDriveLicense = $value;
    }

    /**
     * Sets the hasSharePointLicense property value. Whether the user has been assigned a SharePoint license.
     *  @param bool|null $value Value to set for the hasSharePointLicense property.
    */
    public function setHasSharePointLicense(?bool $value ): void {
        $this->hasSharePointLicense = $value;
    }

    /**
     * Sets the hasSkypeForBusinessLicense property value. Whether the user has been assigned a Skype For Business license.
     *  @param bool|null $value Value to set for the hasSkypeForBusinessLicense property.
    */
    public function setHasSkypeForBusinessLicense(?bool $value ): void {
        $this->hasSkypeForBusinessLicense = $value;
    }

    /**
     * Sets the hasTeamsLicense property value. Whether the user has been assigned a Teams license.
     *  @param bool|null $value Value to set for the hasTeamsLicense property.
    */
    public function setHasTeamsLicense(?bool $value ): void {
        $this->hasTeamsLicense = $value;
    }

    /**
     * Sets the hasYammerLicense property value. Whether the user has been assigned a Yammer license.
     *  @param bool|null $value Value to set for the hasYammerLicense property.
    */
    public function setHasYammerLicense(?bool $value ): void {
        $this->hasYammerLicense = $value;
    }

    /**
     * Sets the isDeleted property value. Whether this user has been deleted or soft deleted.
     *  @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value ): void {
        $this->isDeleted = $value;
    }

    /**
     * Sets the oneDriveLastActivityDate property value. The date when user last viewed or edited files, shared files internally or externally, or synced files.
     *  @param Date|null $value Value to set for the oneDriveLastActivityDate property.
    */
    public function setOneDriveLastActivityDate(?Date $value ): void {
        $this->oneDriveLastActivityDate = $value;
    }

    /**
     * Sets the oneDriveLicenseAssignDate property value. The last date when the user was assigned a OneDrive license.
     *  @param Date|null $value Value to set for the oneDriveLicenseAssignDate property.
    */
    public function setOneDriveLicenseAssignDate(?Date $value ): void {
        $this->oneDriveLicenseAssignDate = $value;
    }

    /**
     * Sets the reportRefreshDate property value. The latest date of the content.
     *  @param Date|null $value Value to set for the reportRefreshDate property.
    */
    public function setReportRefreshDate(?Date $value ): void {
        $this->reportRefreshDate = $value;
    }

    /**
     * Sets the sharePointLastActivityDate property value. The date when user last viewed or edited files, shared files internally or externally, synced files, or viewed SharePoint pages.
     *  @param Date|null $value Value to set for the sharePointLastActivityDate property.
    */
    public function setSharePointLastActivityDate(?Date $value ): void {
        $this->sharePointLastActivityDate = $value;
    }

    /**
     * Sets the sharePointLicenseAssignDate property value. The last date when the user was assigned a SharePoint license.
     *  @param Date|null $value Value to set for the sharePointLicenseAssignDate property.
    */
    public function setSharePointLicenseAssignDate(?Date $value ): void {
        $this->sharePointLicenseAssignDate = $value;
    }

    /**
     * Sets the skypeForBusinessLastActivityDate property value. The date when user last organized or participated in conferences, or joined peer-to-peer sessions.
     *  @param Date|null $value Value to set for the skypeForBusinessLastActivityDate property.
    */
    public function setSkypeForBusinessLastActivityDate(?Date $value ): void {
        $this->skypeForBusinessLastActivityDate = $value;
    }

    /**
     * Sets the skypeForBusinessLicenseAssignDate property value. The last date when the user was assigned a Skype For Business license.
     *  @param Date|null $value Value to set for the skypeForBusinessLicenseAssignDate property.
    */
    public function setSkypeForBusinessLicenseAssignDate(?Date $value ): void {
        $this->skypeForBusinessLicenseAssignDate = $value;
    }

    /**
     * Sets the teamsLastActivityDate property value. The date when user last posted messages in team channels, sent messages in private chat sessions, or participated in meetings or calls.
     *  @param Date|null $value Value to set for the teamsLastActivityDate property.
    */
    public function setTeamsLastActivityDate(?Date $value ): void {
        $this->teamsLastActivityDate = $value;
    }

    /**
     * Sets the teamsLicenseAssignDate property value. The last date when the user was assigned a Teams license.
     *  @param Date|null $value Value to set for the teamsLicenseAssignDate property.
    */
    public function setTeamsLicenseAssignDate(?Date $value ): void {
        $this->teamsLicenseAssignDate = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user. The UPN is an Internet-style login name for the user based on the Internet standard RFC 822. By convention, this should map to the user's email name. The general format is alias@domain, where domain must be present in the tenant’s collection of verified domains. This property is required when a user is created.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the yammerLastActivityDate property value. The date when user last posted, read, or liked message.
     *  @param Date|null $value Value to set for the yammerLastActivityDate property.
    */
    public function setYammerLastActivityDate(?Date $value ): void {
        $this->yammerLastActivityDate = $value;
    }

    /**
     * Sets the yammerLicenseAssignDate property value. The last date when the user was assigned a Yammer license.
     *  @param Date|null $value Value to set for the yammerLicenseAssignDate property.
    */
    public function setYammerLicenseAssignDate(?Date $value ): void {
        $this->yammerLicenseAssignDate = $value;
    }

}
