<?php

namespace Microsoft\Graph\Beta\Generated\Models\TenantAdmin;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Settings extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $allowedDomainGuidsForSyncApp Collection of trusted domain GUIDs for the OneDrive sync app.
    */
    private ?array $allowedDomainGuidsForSyncApp = null;
    
    /**
     * @var array<string>|null $availableManagedPathsForSiteCreation Collection of managed paths available for site creation. Read-only.
    */
    private ?array $availableManagedPathsForSiteCreation = null;
    
    /**
     * @var int|null $deletedUserPersonalSiteRetentionPeriodInDays The number of days for preserving a deleted user's OneDrive.
    */
    private ?int $deletedUserPersonalSiteRetentionPeriodInDays = null;
    
    /**
     * @var array<string>|null $excludedFileExtensionsForSyncApp Collection of file extensions not uploaded by the OneDrive sync app.
    */
    private ?array $excludedFileExtensionsForSyncApp = null;
    
    /**
     * @var IdleSessionSignOut|null $idleSessionSignOut Specifies the idle session sign-out policies for the tenant.
    */
    private ?IdleSessionSignOut $idleSessionSignOut = null;
    
    /**
     * @var ImageTaggingChoice|null $imageTaggingOption Specifies the image tagging option for the tenant. Possible values are: disabled, basic, enhanced.
    */
    private ?ImageTaggingChoice $imageTaggingOption = null;
    
    /**
     * @var bool|null $isCommentingOnSitePagesEnabled Indicates whether comments are allowed on modern site pages in SharePoint.
    */
    private ?bool $isCommentingOnSitePagesEnabled = null;
    
    /**
     * @var bool|null $isFileActivityNotificationEnabled Indicates whether push notifications are enabled for OneDrive events.
    */
    private ?bool $isFileActivityNotificationEnabled = null;
    
    /**
     * @var bool|null $isLegacyAuthProtocolsEnabled Indicates whether legacy authentication protocols are enabled for the tenant.
    */
    private ?bool $isLegacyAuthProtocolsEnabled = null;
    
    /**
     * @var bool|null $isLoopEnabled Indicates whetherif Fluid Framework is allowed on SharePoint sites.
    */
    private ?bool $isLoopEnabled = null;
    
    /**
     * @var bool|null $isMacSyncAppEnabled Indicates whether files can be synced using the OneDrive sync app for Mac.
    */
    private ?bool $isMacSyncAppEnabled = null;
    
    /**
     * @var bool|null $isRequireAcceptingUserToMatchInvitedUserEnabled Indicates whether guests must sign in using the same account to which sharing invitations are sent.
    */
    private ?bool $isRequireAcceptingUserToMatchInvitedUserEnabled = null;
    
    /**
     * @var bool|null $isResharingByExternalUsersEnabled Indicates whether guests are allowed to reshare files, folders, and sites they don't own.
    */
    private ?bool $isResharingByExternalUsersEnabled = null;
    
    /**
     * @var bool|null $isSharePointMobileNotificationEnabled Indicates whether mobile push notifications are enabled for SharePoint.
    */
    private ?bool $isSharePointMobileNotificationEnabled = null;
    
    /**
     * @var bool|null $isSharePointNewsfeedEnabled Indicates whether the newsfeed is allowed on the modern site pages in SharePoint.
    */
    private ?bool $isSharePointNewsfeedEnabled = null;
    
    /**
     * @var bool|null $isSiteCreationEnabled Indicates whether users are allowed to create sites.
    */
    private ?bool $isSiteCreationEnabled = null;
    
    /**
     * @var bool|null $isSiteCreationUIEnabled Indicates whether the UI commands for creating sites are shown.
    */
    private ?bool $isSiteCreationUIEnabled = null;
    
    /**
     * @var bool|null $isSitePagesCreationEnabled Indicates whether creating new modern pages is allowed on SharePoint sites.
    */
    private ?bool $isSitePagesCreationEnabled = null;
    
    /**
     * @var bool|null $isSitesStorageLimitAutomatic Indicates whether site storage space is automatically managed or if specific storage limits are set per site.
    */
    private ?bool $isSitesStorageLimitAutomatic = null;
    
    /**
     * @var bool|null $isSyncButtonHiddenOnPersonalSite Indicates whether the sync button in OneDrive is hidden.
    */
    private ?bool $isSyncButtonHiddenOnPersonalSite = null;
    
    /**
     * @var bool|null $isUnmanagedSyncAppForTenantRestricted Indicates whether users are allowed to sync files only on PCs joined to specific domains.
    */
    private ?bool $isUnmanagedSyncAppForTenantRestricted = null;
    
    /**
     * @var int|null $personalSiteDefaultStorageLimitInMB The default OneDrive storage limit for all new and existing users who are assigned a qualifying license. Measured in megabytes (MB).
    */
    private ?int $personalSiteDefaultStorageLimitInMB = null;
    
    /**
     * @var array<string>|null $sharingAllowedDomainList Collection of email domains that are allowed for sharing outside the organization.
    */
    private ?array $sharingAllowedDomainList = null;
    
    /**
     * @var array<string>|null $sharingBlockedDomainList Collection of email domains that are blocked for sharing outside the organization.
    */
    private ?array $sharingBlockedDomainList = null;
    
    /**
     * @var SharingCapabilities|null $sharingCapability Sharing capability for the tenant. Possible values are: disabled, externalUserSharingOnly, externalUserAndGuestSharing, existingExternalUserSharingOnly.
    */
    private ?SharingCapabilities $sharingCapability = null;
    
    /**
     * @var SharingDomainRestrictionMode|null $sharingDomainRestrictionMode Specifies the external sharing mode for domains. Possible values are: none, allowList, blockList.
    */
    private ?SharingDomainRestrictionMode $sharingDomainRestrictionMode = null;
    
    /**
     * @var string|null $siteCreationDefaultManagedPath The value of the team site managed path. This is the path under which new team sites will be created.
    */
    private ?string $siteCreationDefaultManagedPath = null;
    
    /**
     * @var int|null $siteCreationDefaultStorageLimitInMB The default storage quota for a new site upon creation. Measured in megabytes (MB).
    */
    private ?int $siteCreationDefaultStorageLimitInMB = null;
    
    /**
     * @var string|null $tenantDefaultTimezone The default timezone of a tenant for newly created sites.
    */
    private ?string $tenantDefaultTimezone = null;
    
    /**
     * Instantiates a new settings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.tenantAdmin.settings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Settings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Settings {
        return new Settings();
    }

    /**
     * Gets the allowedDomainGuidsForSyncApp property value. Collection of trusted domain GUIDs for the OneDrive sync app.
     * @return array<string>|null
    */
    public function getAllowedDomainGuidsForSyncApp(): ?array {
        return $this->allowedDomainGuidsForSyncApp;
    }

    /**
     * Gets the availableManagedPathsForSiteCreation property value. Collection of managed paths available for site creation. Read-only.
     * @return array<string>|null
    */
    public function getAvailableManagedPathsForSiteCreation(): ?array {
        return $this->availableManagedPathsForSiteCreation;
    }

    /**
     * Gets the deletedUserPersonalSiteRetentionPeriodInDays property value. The number of days for preserving a deleted user's OneDrive.
     * @return int|null
    */
    public function getDeletedUserPersonalSiteRetentionPeriodInDays(): ?int {
        return $this->deletedUserPersonalSiteRetentionPeriodInDays;
    }

    /**
     * Gets the excludedFileExtensionsForSyncApp property value. Collection of file extensions not uploaded by the OneDrive sync app.
     * @return array<string>|null
    */
    public function getExcludedFileExtensionsForSyncApp(): ?array {
        return $this->excludedFileExtensionsForSyncApp;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedDomainGuidsForSyncApp' => fn(ParseNode $n) => $o->setAllowedDomainGuidsForSyncApp($n->getCollectionOfPrimitiveValues()),
            'availableManagedPathsForSiteCreation' => fn(ParseNode $n) => $o->setAvailableManagedPathsForSiteCreation($n->getCollectionOfPrimitiveValues()),
            'deletedUserPersonalSiteRetentionPeriodInDays' => fn(ParseNode $n) => $o->setDeletedUserPersonalSiteRetentionPeriodInDays($n->getIntegerValue()),
            'excludedFileExtensionsForSyncApp' => fn(ParseNode $n) => $o->setExcludedFileExtensionsForSyncApp($n->getCollectionOfPrimitiveValues()),
            'idleSessionSignOut' => fn(ParseNode $n) => $o->setIdleSessionSignOut($n->getObjectValue([IdleSessionSignOut::class, 'createFromDiscriminatorValue'])),
            'imageTaggingOption' => fn(ParseNode $n) => $o->setImageTaggingOption($n->getEnumValue(ImageTaggingChoice::class)),
            'isCommentingOnSitePagesEnabled' => fn(ParseNode $n) => $o->setIsCommentingOnSitePagesEnabled($n->getBooleanValue()),
            'isFileActivityNotificationEnabled' => fn(ParseNode $n) => $o->setIsFileActivityNotificationEnabled($n->getBooleanValue()),
            'isLegacyAuthProtocolsEnabled' => fn(ParseNode $n) => $o->setIsLegacyAuthProtocolsEnabled($n->getBooleanValue()),
            'isLoopEnabled' => fn(ParseNode $n) => $o->setIsLoopEnabled($n->getBooleanValue()),
            'isMacSyncAppEnabled' => fn(ParseNode $n) => $o->setIsMacSyncAppEnabled($n->getBooleanValue()),
            'isRequireAcceptingUserToMatchInvitedUserEnabled' => fn(ParseNode $n) => $o->setIsRequireAcceptingUserToMatchInvitedUserEnabled($n->getBooleanValue()),
            'isResharingByExternalUsersEnabled' => fn(ParseNode $n) => $o->setIsResharingByExternalUsersEnabled($n->getBooleanValue()),
            'isSharePointMobileNotificationEnabled' => fn(ParseNode $n) => $o->setIsSharePointMobileNotificationEnabled($n->getBooleanValue()),
            'isSharePointNewsfeedEnabled' => fn(ParseNode $n) => $o->setIsSharePointNewsfeedEnabled($n->getBooleanValue()),
            'isSiteCreationEnabled' => fn(ParseNode $n) => $o->setIsSiteCreationEnabled($n->getBooleanValue()),
            'isSiteCreationUIEnabled' => fn(ParseNode $n) => $o->setIsSiteCreationUIEnabled($n->getBooleanValue()),
            'isSitePagesCreationEnabled' => fn(ParseNode $n) => $o->setIsSitePagesCreationEnabled($n->getBooleanValue()),
            'isSitesStorageLimitAutomatic' => fn(ParseNode $n) => $o->setIsSitesStorageLimitAutomatic($n->getBooleanValue()),
            'isSyncButtonHiddenOnPersonalSite' => fn(ParseNode $n) => $o->setIsSyncButtonHiddenOnPersonalSite($n->getBooleanValue()),
            'isUnmanagedSyncAppForTenantRestricted' => fn(ParseNode $n) => $o->setIsUnmanagedSyncAppForTenantRestricted($n->getBooleanValue()),
            'personalSiteDefaultStorageLimitInMB' => fn(ParseNode $n) => $o->setPersonalSiteDefaultStorageLimitInMB($n->getIntegerValue()),
            'sharingAllowedDomainList' => fn(ParseNode $n) => $o->setSharingAllowedDomainList($n->getCollectionOfPrimitiveValues()),
            'sharingBlockedDomainList' => fn(ParseNode $n) => $o->setSharingBlockedDomainList($n->getCollectionOfPrimitiveValues()),
            'sharingCapability' => fn(ParseNode $n) => $o->setSharingCapability($n->getEnumValue(SharingCapabilities::class)),
            'sharingDomainRestrictionMode' => fn(ParseNode $n) => $o->setSharingDomainRestrictionMode($n->getEnumValue(SharingDomainRestrictionMode::class)),
            'siteCreationDefaultManagedPath' => fn(ParseNode $n) => $o->setSiteCreationDefaultManagedPath($n->getStringValue()),
            'siteCreationDefaultStorageLimitInMB' => fn(ParseNode $n) => $o->setSiteCreationDefaultStorageLimitInMB($n->getIntegerValue()),
            'tenantDefaultTimezone' => fn(ParseNode $n) => $o->setTenantDefaultTimezone($n->getStringValue()),
        ]);
    }

    /**
     * Gets the idleSessionSignOut property value. Specifies the idle session sign-out policies for the tenant.
     * @return IdleSessionSignOut|null
    */
    public function getIdleSessionSignOut(): ?IdleSessionSignOut {
        return $this->idleSessionSignOut;
    }

    /**
     * Gets the imageTaggingOption property value. Specifies the image tagging option for the tenant. Possible values are: disabled, basic, enhanced.
     * @return ImageTaggingChoice|null
    */
    public function getImageTaggingOption(): ?ImageTaggingChoice {
        return $this->imageTaggingOption;
    }

    /**
     * Gets the isCommentingOnSitePagesEnabled property value. Indicates whether comments are allowed on modern site pages in SharePoint.
     * @return bool|null
    */
    public function getIsCommentingOnSitePagesEnabled(): ?bool {
        return $this->isCommentingOnSitePagesEnabled;
    }

    /**
     * Gets the isFileActivityNotificationEnabled property value. Indicates whether push notifications are enabled for OneDrive events.
     * @return bool|null
    */
    public function getIsFileActivityNotificationEnabled(): ?bool {
        return $this->isFileActivityNotificationEnabled;
    }

    /**
     * Gets the isLegacyAuthProtocolsEnabled property value. Indicates whether legacy authentication protocols are enabled for the tenant.
     * @return bool|null
    */
    public function getIsLegacyAuthProtocolsEnabled(): ?bool {
        return $this->isLegacyAuthProtocolsEnabled;
    }

    /**
     * Gets the isLoopEnabled property value. Indicates whetherif Fluid Framework is allowed on SharePoint sites.
     * @return bool|null
    */
    public function getIsLoopEnabled(): ?bool {
        return $this->isLoopEnabled;
    }

    /**
     * Gets the isMacSyncAppEnabled property value. Indicates whether files can be synced using the OneDrive sync app for Mac.
     * @return bool|null
    */
    public function getIsMacSyncAppEnabled(): ?bool {
        return $this->isMacSyncAppEnabled;
    }

    /**
     * Gets the isRequireAcceptingUserToMatchInvitedUserEnabled property value. Indicates whether guests must sign in using the same account to which sharing invitations are sent.
     * @return bool|null
    */
    public function getIsRequireAcceptingUserToMatchInvitedUserEnabled(): ?bool {
        return $this->isRequireAcceptingUserToMatchInvitedUserEnabled;
    }

    /**
     * Gets the isResharingByExternalUsersEnabled property value. Indicates whether guests are allowed to reshare files, folders, and sites they don't own.
     * @return bool|null
    */
    public function getIsResharingByExternalUsersEnabled(): ?bool {
        return $this->isResharingByExternalUsersEnabled;
    }

    /**
     * Gets the isSharePointMobileNotificationEnabled property value. Indicates whether mobile push notifications are enabled for SharePoint.
     * @return bool|null
    */
    public function getIsSharePointMobileNotificationEnabled(): ?bool {
        return $this->isSharePointMobileNotificationEnabled;
    }

    /**
     * Gets the isSharePointNewsfeedEnabled property value. Indicates whether the newsfeed is allowed on the modern site pages in SharePoint.
     * @return bool|null
    */
    public function getIsSharePointNewsfeedEnabled(): ?bool {
        return $this->isSharePointNewsfeedEnabled;
    }

    /**
     * Gets the isSiteCreationEnabled property value. Indicates whether users are allowed to create sites.
     * @return bool|null
    */
    public function getIsSiteCreationEnabled(): ?bool {
        return $this->isSiteCreationEnabled;
    }

    /**
     * Gets the isSiteCreationUIEnabled property value. Indicates whether the UI commands for creating sites are shown.
     * @return bool|null
    */
    public function getIsSiteCreationUIEnabled(): ?bool {
        return $this->isSiteCreationUIEnabled;
    }

    /**
     * Gets the isSitePagesCreationEnabled property value. Indicates whether creating new modern pages is allowed on SharePoint sites.
     * @return bool|null
    */
    public function getIsSitePagesCreationEnabled(): ?bool {
        return $this->isSitePagesCreationEnabled;
    }

    /**
     * Gets the isSitesStorageLimitAutomatic property value. Indicates whether site storage space is automatically managed or if specific storage limits are set per site.
     * @return bool|null
    */
    public function getIsSitesStorageLimitAutomatic(): ?bool {
        return $this->isSitesStorageLimitAutomatic;
    }

    /**
     * Gets the isSyncButtonHiddenOnPersonalSite property value. Indicates whether the sync button in OneDrive is hidden.
     * @return bool|null
    */
    public function getIsSyncButtonHiddenOnPersonalSite(): ?bool {
        return $this->isSyncButtonHiddenOnPersonalSite;
    }

    /**
     * Gets the isUnmanagedSyncAppForTenantRestricted property value. Indicates whether users are allowed to sync files only on PCs joined to specific domains.
     * @return bool|null
    */
    public function getIsUnmanagedSyncAppForTenantRestricted(): ?bool {
        return $this->isUnmanagedSyncAppForTenantRestricted;
    }

    /**
     * Gets the personalSiteDefaultStorageLimitInMB property value. The default OneDrive storage limit for all new and existing users who are assigned a qualifying license. Measured in megabytes (MB).
     * @return int|null
    */
    public function getPersonalSiteDefaultStorageLimitInMB(): ?int {
        return $this->personalSiteDefaultStorageLimitInMB;
    }

    /**
     * Gets the sharingAllowedDomainList property value. Collection of email domains that are allowed for sharing outside the organization.
     * @return array<string>|null
    */
    public function getSharingAllowedDomainList(): ?array {
        return $this->sharingAllowedDomainList;
    }

    /**
     * Gets the sharingBlockedDomainList property value. Collection of email domains that are blocked for sharing outside the organization.
     * @return array<string>|null
    */
    public function getSharingBlockedDomainList(): ?array {
        return $this->sharingBlockedDomainList;
    }

    /**
     * Gets the sharingCapability property value. Sharing capability for the tenant. Possible values are: disabled, externalUserSharingOnly, externalUserAndGuestSharing, existingExternalUserSharingOnly.
     * @return SharingCapabilities|null
    */
    public function getSharingCapability(): ?SharingCapabilities {
        return $this->sharingCapability;
    }

    /**
     * Gets the sharingDomainRestrictionMode property value. Specifies the external sharing mode for domains. Possible values are: none, allowList, blockList.
     * @return SharingDomainRestrictionMode|null
    */
    public function getSharingDomainRestrictionMode(): ?SharingDomainRestrictionMode {
        return $this->sharingDomainRestrictionMode;
    }

    /**
     * Gets the siteCreationDefaultManagedPath property value. The value of the team site managed path. This is the path under which new team sites will be created.
     * @return string|null
    */
    public function getSiteCreationDefaultManagedPath(): ?string {
        return $this->siteCreationDefaultManagedPath;
    }

    /**
     * Gets the siteCreationDefaultStorageLimitInMB property value. The default storage quota for a new site upon creation. Measured in megabytes (MB).
     * @return int|null
    */
    public function getSiteCreationDefaultStorageLimitInMB(): ?int {
        return $this->siteCreationDefaultStorageLimitInMB;
    }

    /**
     * Gets the tenantDefaultTimezone property value. The default timezone of a tenant for newly created sites.
     * @return string|null
    */
    public function getTenantDefaultTimezone(): ?string {
        return $this->tenantDefaultTimezone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedDomainGuidsForSyncApp', $this->allowedDomainGuidsForSyncApp);
        $writer->writeCollectionOfPrimitiveValues('availableManagedPathsForSiteCreation', $this->availableManagedPathsForSiteCreation);
        $writer->writeIntegerValue('deletedUserPersonalSiteRetentionPeriodInDays', $this->deletedUserPersonalSiteRetentionPeriodInDays);
        $writer->writeCollectionOfPrimitiveValues('excludedFileExtensionsForSyncApp', $this->excludedFileExtensionsForSyncApp);
        $writer->writeObjectValue('idleSessionSignOut', $this->idleSessionSignOut);
        $writer->writeEnumValue('imageTaggingOption', $this->imageTaggingOption);
        $writer->writeBooleanValue('isCommentingOnSitePagesEnabled', $this->isCommentingOnSitePagesEnabled);
        $writer->writeBooleanValue('isFileActivityNotificationEnabled', $this->isFileActivityNotificationEnabled);
        $writer->writeBooleanValue('isLegacyAuthProtocolsEnabled', $this->isLegacyAuthProtocolsEnabled);
        $writer->writeBooleanValue('isLoopEnabled', $this->isLoopEnabled);
        $writer->writeBooleanValue('isMacSyncAppEnabled', $this->isMacSyncAppEnabled);
        $writer->writeBooleanValue('isRequireAcceptingUserToMatchInvitedUserEnabled', $this->isRequireAcceptingUserToMatchInvitedUserEnabled);
        $writer->writeBooleanValue('isResharingByExternalUsersEnabled', $this->isResharingByExternalUsersEnabled);
        $writer->writeBooleanValue('isSharePointMobileNotificationEnabled', $this->isSharePointMobileNotificationEnabled);
        $writer->writeBooleanValue('isSharePointNewsfeedEnabled', $this->isSharePointNewsfeedEnabled);
        $writer->writeBooleanValue('isSiteCreationEnabled', $this->isSiteCreationEnabled);
        $writer->writeBooleanValue('isSiteCreationUIEnabled', $this->isSiteCreationUIEnabled);
        $writer->writeBooleanValue('isSitePagesCreationEnabled', $this->isSitePagesCreationEnabled);
        $writer->writeBooleanValue('isSitesStorageLimitAutomatic', $this->isSitesStorageLimitAutomatic);
        $writer->writeBooleanValue('isSyncButtonHiddenOnPersonalSite', $this->isSyncButtonHiddenOnPersonalSite);
        $writer->writeBooleanValue('isUnmanagedSyncAppForTenantRestricted', $this->isUnmanagedSyncAppForTenantRestricted);
        $writer->writeIntegerValue('personalSiteDefaultStorageLimitInMB', $this->personalSiteDefaultStorageLimitInMB);
        $writer->writeCollectionOfPrimitiveValues('sharingAllowedDomainList', $this->sharingAllowedDomainList);
        $writer->writeCollectionOfPrimitiveValues('sharingBlockedDomainList', $this->sharingBlockedDomainList);
        $writer->writeEnumValue('sharingCapability', $this->sharingCapability);
        $writer->writeEnumValue('sharingDomainRestrictionMode', $this->sharingDomainRestrictionMode);
        $writer->writeStringValue('siteCreationDefaultManagedPath', $this->siteCreationDefaultManagedPath);
        $writer->writeIntegerValue('siteCreationDefaultStorageLimitInMB', $this->siteCreationDefaultStorageLimitInMB);
        $writer->writeStringValue('tenantDefaultTimezone', $this->tenantDefaultTimezone);
    }

    /**
     * Sets the allowedDomainGuidsForSyncApp property value. Collection of trusted domain GUIDs for the OneDrive sync app.
     *  @param array<string>|null $value Value to set for the allowedDomainGuidsForSyncApp property.
    */
    public function setAllowedDomainGuidsForSyncApp(?array $value ): void {
        $this->allowedDomainGuidsForSyncApp = $value;
    }

    /**
     * Sets the availableManagedPathsForSiteCreation property value. Collection of managed paths available for site creation. Read-only.
     *  @param array<string>|null $value Value to set for the availableManagedPathsForSiteCreation property.
    */
    public function setAvailableManagedPathsForSiteCreation(?array $value ): void {
        $this->availableManagedPathsForSiteCreation = $value;
    }

    /**
     * Sets the deletedUserPersonalSiteRetentionPeriodInDays property value. The number of days for preserving a deleted user's OneDrive.
     *  @param int|null $value Value to set for the deletedUserPersonalSiteRetentionPeriodInDays property.
    */
    public function setDeletedUserPersonalSiteRetentionPeriodInDays(?int $value ): void {
        $this->deletedUserPersonalSiteRetentionPeriodInDays = $value;
    }

    /**
     * Sets the excludedFileExtensionsForSyncApp property value. Collection of file extensions not uploaded by the OneDrive sync app.
     *  @param array<string>|null $value Value to set for the excludedFileExtensionsForSyncApp property.
    */
    public function setExcludedFileExtensionsForSyncApp(?array $value ): void {
        $this->excludedFileExtensionsForSyncApp = $value;
    }

    /**
     * Sets the idleSessionSignOut property value. Specifies the idle session sign-out policies for the tenant.
     *  @param IdleSessionSignOut|null $value Value to set for the idleSessionSignOut property.
    */
    public function setIdleSessionSignOut(?IdleSessionSignOut $value ): void {
        $this->idleSessionSignOut = $value;
    }

    /**
     * Sets the imageTaggingOption property value. Specifies the image tagging option for the tenant. Possible values are: disabled, basic, enhanced.
     *  @param ImageTaggingChoice|null $value Value to set for the imageTaggingOption property.
    */
    public function setImageTaggingOption(?ImageTaggingChoice $value ): void {
        $this->imageTaggingOption = $value;
    }

    /**
     * Sets the isCommentingOnSitePagesEnabled property value. Indicates whether comments are allowed on modern site pages in SharePoint.
     *  @param bool|null $value Value to set for the isCommentingOnSitePagesEnabled property.
    */
    public function setIsCommentingOnSitePagesEnabled(?bool $value ): void {
        $this->isCommentingOnSitePagesEnabled = $value;
    }

    /**
     * Sets the isFileActivityNotificationEnabled property value. Indicates whether push notifications are enabled for OneDrive events.
     *  @param bool|null $value Value to set for the isFileActivityNotificationEnabled property.
    */
    public function setIsFileActivityNotificationEnabled(?bool $value ): void {
        $this->isFileActivityNotificationEnabled = $value;
    }

    /**
     * Sets the isLegacyAuthProtocolsEnabled property value. Indicates whether legacy authentication protocols are enabled for the tenant.
     *  @param bool|null $value Value to set for the isLegacyAuthProtocolsEnabled property.
    */
    public function setIsLegacyAuthProtocolsEnabled(?bool $value ): void {
        $this->isLegacyAuthProtocolsEnabled = $value;
    }

    /**
     * Sets the isLoopEnabled property value. Indicates whetherif Fluid Framework is allowed on SharePoint sites.
     *  @param bool|null $value Value to set for the isLoopEnabled property.
    */
    public function setIsLoopEnabled(?bool $value ): void {
        $this->isLoopEnabled = $value;
    }

    /**
     * Sets the isMacSyncAppEnabled property value. Indicates whether files can be synced using the OneDrive sync app for Mac.
     *  @param bool|null $value Value to set for the isMacSyncAppEnabled property.
    */
    public function setIsMacSyncAppEnabled(?bool $value ): void {
        $this->isMacSyncAppEnabled = $value;
    }

    /**
     * Sets the isRequireAcceptingUserToMatchInvitedUserEnabled property value. Indicates whether guests must sign in using the same account to which sharing invitations are sent.
     *  @param bool|null $value Value to set for the isRequireAcceptingUserToMatchInvitedUserEnabled property.
    */
    public function setIsRequireAcceptingUserToMatchInvitedUserEnabled(?bool $value ): void {
        $this->isRequireAcceptingUserToMatchInvitedUserEnabled = $value;
    }

    /**
     * Sets the isResharingByExternalUsersEnabled property value. Indicates whether guests are allowed to reshare files, folders, and sites they don't own.
     *  @param bool|null $value Value to set for the isResharingByExternalUsersEnabled property.
    */
    public function setIsResharingByExternalUsersEnabled(?bool $value ): void {
        $this->isResharingByExternalUsersEnabled = $value;
    }

    /**
     * Sets the isSharePointMobileNotificationEnabled property value. Indicates whether mobile push notifications are enabled for SharePoint.
     *  @param bool|null $value Value to set for the isSharePointMobileNotificationEnabled property.
    */
    public function setIsSharePointMobileNotificationEnabled(?bool $value ): void {
        $this->isSharePointMobileNotificationEnabled = $value;
    }

    /**
     * Sets the isSharePointNewsfeedEnabled property value. Indicates whether the newsfeed is allowed on the modern site pages in SharePoint.
     *  @param bool|null $value Value to set for the isSharePointNewsfeedEnabled property.
    */
    public function setIsSharePointNewsfeedEnabled(?bool $value ): void {
        $this->isSharePointNewsfeedEnabled = $value;
    }

    /**
     * Sets the isSiteCreationEnabled property value. Indicates whether users are allowed to create sites.
     *  @param bool|null $value Value to set for the isSiteCreationEnabled property.
    */
    public function setIsSiteCreationEnabled(?bool $value ): void {
        $this->isSiteCreationEnabled = $value;
    }

    /**
     * Sets the isSiteCreationUIEnabled property value. Indicates whether the UI commands for creating sites are shown.
     *  @param bool|null $value Value to set for the isSiteCreationUIEnabled property.
    */
    public function setIsSiteCreationUIEnabled(?bool $value ): void {
        $this->isSiteCreationUIEnabled = $value;
    }

    /**
     * Sets the isSitePagesCreationEnabled property value. Indicates whether creating new modern pages is allowed on SharePoint sites.
     *  @param bool|null $value Value to set for the isSitePagesCreationEnabled property.
    */
    public function setIsSitePagesCreationEnabled(?bool $value ): void {
        $this->isSitePagesCreationEnabled = $value;
    }

    /**
     * Sets the isSitesStorageLimitAutomatic property value. Indicates whether site storage space is automatically managed or if specific storage limits are set per site.
     *  @param bool|null $value Value to set for the isSitesStorageLimitAutomatic property.
    */
    public function setIsSitesStorageLimitAutomatic(?bool $value ): void {
        $this->isSitesStorageLimitAutomatic = $value;
    }

    /**
     * Sets the isSyncButtonHiddenOnPersonalSite property value. Indicates whether the sync button in OneDrive is hidden.
     *  @param bool|null $value Value to set for the isSyncButtonHiddenOnPersonalSite property.
    */
    public function setIsSyncButtonHiddenOnPersonalSite(?bool $value ): void {
        $this->isSyncButtonHiddenOnPersonalSite = $value;
    }

    /**
     * Sets the isUnmanagedSyncAppForTenantRestricted property value. Indicates whether users are allowed to sync files only on PCs joined to specific domains.
     *  @param bool|null $value Value to set for the isUnmanagedSyncAppForTenantRestricted property.
    */
    public function setIsUnmanagedSyncAppForTenantRestricted(?bool $value ): void {
        $this->isUnmanagedSyncAppForTenantRestricted = $value;
    }

    /**
     * Sets the personalSiteDefaultStorageLimitInMB property value. The default OneDrive storage limit for all new and existing users who are assigned a qualifying license. Measured in megabytes (MB).
     *  @param int|null $value Value to set for the personalSiteDefaultStorageLimitInMB property.
    */
    public function setPersonalSiteDefaultStorageLimitInMB(?int $value ): void {
        $this->personalSiteDefaultStorageLimitInMB = $value;
    }

    /**
     * Sets the sharingAllowedDomainList property value. Collection of email domains that are allowed for sharing outside the organization.
     *  @param array<string>|null $value Value to set for the sharingAllowedDomainList property.
    */
    public function setSharingAllowedDomainList(?array $value ): void {
        $this->sharingAllowedDomainList = $value;
    }

    /**
     * Sets the sharingBlockedDomainList property value. Collection of email domains that are blocked for sharing outside the organization.
     *  @param array<string>|null $value Value to set for the sharingBlockedDomainList property.
    */
    public function setSharingBlockedDomainList(?array $value ): void {
        $this->sharingBlockedDomainList = $value;
    }

    /**
     * Sets the sharingCapability property value. Sharing capability for the tenant. Possible values are: disabled, externalUserSharingOnly, externalUserAndGuestSharing, existingExternalUserSharingOnly.
     *  @param SharingCapabilities|null $value Value to set for the sharingCapability property.
    */
    public function setSharingCapability(?SharingCapabilities $value ): void {
        $this->sharingCapability = $value;
    }

    /**
     * Sets the sharingDomainRestrictionMode property value. Specifies the external sharing mode for domains. Possible values are: none, allowList, blockList.
     *  @param SharingDomainRestrictionMode|null $value Value to set for the sharingDomainRestrictionMode property.
    */
    public function setSharingDomainRestrictionMode(?SharingDomainRestrictionMode $value ): void {
        $this->sharingDomainRestrictionMode = $value;
    }

    /**
     * Sets the siteCreationDefaultManagedPath property value. The value of the team site managed path. This is the path under which new team sites will be created.
     *  @param string|null $value Value to set for the siteCreationDefaultManagedPath property.
    */
    public function setSiteCreationDefaultManagedPath(?string $value ): void {
        $this->siteCreationDefaultManagedPath = $value;
    }

    /**
     * Sets the siteCreationDefaultStorageLimitInMB property value. The default storage quota for a new site upon creation. Measured in megabytes (MB).
     *  @param int|null $value Value to set for the siteCreationDefaultStorageLimitInMB property.
    */
    public function setSiteCreationDefaultStorageLimitInMB(?int $value ): void {
        $this->siteCreationDefaultStorageLimitInMB = $value;
    }

    /**
     * Sets the tenantDefaultTimezone property value. The default timezone of a tenant for newly created sites.
     *  @param string|null $value Value to set for the tenantDefaultTimezone property.
    */
    public function setTenantDefaultTimezone(?string $value ): void {
        $this->tenantDefaultTimezone = $value;
    }

}
