<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * An abstract class containing the base properties for Intune mobile apps. Note: Listing mobile apps with `$expand=assignments` has been deprecated. Instead get the list of apps without the `$expand` query on `assignments`. Then, perform the expansion on individual applications.
*/
class MobileApp extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new mobileApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileApp {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidForWorkApp': return new AndroidForWorkApp();
                case '#microsoft.graph.androidLobApp': return new AndroidLobApp();
                case '#microsoft.graph.androidManagedStoreApp': return new AndroidManagedStoreApp();
                case '#microsoft.graph.androidManagedStoreWebApp': return new AndroidManagedStoreWebApp();
                case '#microsoft.graph.androidStoreApp': return new AndroidStoreApp();
                case '#microsoft.graph.iosiPadOSWebClip': return new IosiPadOSWebClip();
                case '#microsoft.graph.iosLobApp': return new IosLobApp();
                case '#microsoft.graph.iosStoreApp': return new IosStoreApp();
                case '#microsoft.graph.iosVppApp': return new IosVppApp();
                case '#microsoft.graph.macOSDmgApp': return new MacOSDmgApp();
                case '#microsoft.graph.macOSLobApp': return new MacOSLobApp();
                case '#microsoft.graph.macOSMdatpApp': return new MacOSMdatpApp();
                case '#microsoft.graph.macOSMicrosoftDefenderApp': return new MacOSMicrosoftDefenderApp();
                case '#microsoft.graph.macOSMicrosoftEdgeApp': return new MacOSMicrosoftEdgeApp();
                case '#microsoft.graph.macOSOfficeSuiteApp': return new MacOSOfficeSuiteApp();
                case '#microsoft.graph.macOSPkgApp': return new MacOSPkgApp();
                case '#microsoft.graph.macOsVppApp': return new MacOsVppApp();
                case '#microsoft.graph.managedAndroidLobApp': return new ManagedAndroidLobApp();
                case '#microsoft.graph.managedAndroidStoreApp': return new ManagedAndroidStoreApp();
                case '#microsoft.graph.managedApp': return new ManagedApp();
                case '#microsoft.graph.managedIOSLobApp': return new ManagedIOSLobApp();
                case '#microsoft.graph.managedIOSStoreApp': return new ManagedIOSStoreApp();
                case '#microsoft.graph.managedMobileLobApp': return new ManagedMobileLobApp();
                case '#microsoft.graph.microsoftStoreForBusinessApp': return new MicrosoftStoreForBusinessApp();
                case '#microsoft.graph.mobileLobApp': return new MobileLobApp();
                case '#microsoft.graph.officeSuiteApp': return new OfficeSuiteApp();
                case '#microsoft.graph.webApp': return new WebApp();
                case '#microsoft.graph.win32LobApp': return new Win32LobApp();
                case '#microsoft.graph.windowsAppX': return new WindowsAppX();
                case '#microsoft.graph.windowsMicrosoftEdgeApp': return new WindowsMicrosoftEdgeApp();
                case '#microsoft.graph.windowsMobileMSI': return new WindowsMobileMSI();
                case '#microsoft.graph.windowsPhone81AppX': return new WindowsPhone81AppX();
                case '#microsoft.graph.windowsPhone81AppXBundle': return new WindowsPhone81AppXBundle();
                case '#microsoft.graph.windowsPhone81StoreApp': return new WindowsPhone81StoreApp();
                case '#microsoft.graph.windowsPhoneXAP': return new WindowsPhoneXAP();
                case '#microsoft.graph.windowsStoreApp': return new WindowsStoreApp();
                case '#microsoft.graph.windowsUniversalAppX': return new WindowsUniversalAppX();
                case '#microsoft.graph.windowsWebApp': return new WindowsWebApp();
                case '#microsoft.graph.winGetApp': return new WinGetApp();
            }
        }
        return new MobileApp();
    }

    /**
     * Gets the assignments property value. The list of group assignments for this mobile app.
     * @return array<MobileAppAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppAssignment::class);
            /** @var array<MobileAppAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the categories property value. The list of categories for this app.
     * @return array<MobileAppCategory>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppCategory::class);
            /** @var array<MobileAppCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the app was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the dependentAppCount property value. The total number of dependencies the child app has.
     * @return int|null
    */
    public function getDependentAppCount(): ?int {
        $val = $this->getBackingStore()->get('dependentAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dependentAppCount'");
    }

    /**
     * Gets the description property value. The description of the app.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the developer property value. The developer of the app.
     * @return string|null
    */
    public function getDeveloper(): ?string {
        $val = $this->getBackingStore()->get('developer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'developer'");
    }

    /**
     * Gets the displayName property value. The admin provided or imported title of the app.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([MobileAppAssignment::class, 'createFromDiscriminatorValue'])),
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfObjectValues([MobileAppCategory::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'dependentAppCount' => fn(ParseNode $n) => $o->setDependentAppCount($n->getIntegerValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'developer' => fn(ParseNode $n) => $o->setDeveloper($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'informationUrl' => fn(ParseNode $n) => $o->setInformationUrl($n->getStringValue()),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
            'isFeatured' => fn(ParseNode $n) => $o->setIsFeatured($n->getBooleanValue()),
            'largeIcon' => fn(ParseNode $n) => $o->setLargeIcon($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'privacyInformationUrl' => fn(ParseNode $n) => $o->setPrivacyInformationUrl($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'publishingState' => fn(ParseNode $n) => $o->setPublishingState($n->getEnumValue(MobileAppPublishingState::class)),
            'relationships' => fn(ParseNode $n) => $o->setRelationships($n->getCollectionOfObjectValues([MobileAppRelationship::class, 'createFromDiscriminatorValue'])),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'supersededAppCount' => fn(ParseNode $n) => $o->setSupersededAppCount($n->getIntegerValue()),
            'supersedingAppCount' => fn(ParseNode $n) => $o->setSupersedingAppCount($n->getIntegerValue()),
            'uploadState' => fn(ParseNode $n) => $o->setUploadState($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the informationUrl property value. The more information Url.
     * @return string|null
    */
    public function getInformationUrl(): ?string {
        $val = $this->getBackingStore()->get('informationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'informationUrl'");
    }

    /**
     * Gets the isAssigned property value. The value indicating whether the app is assigned to at least one group.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        $val = $this->getBackingStore()->get('isAssigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAssigned'");
    }

    /**
     * Gets the isFeatured property value. The value indicating whether the app is marked as featured by the admin.
     * @return bool|null
    */
    public function getIsFeatured(): ?bool {
        $val = $this->getBackingStore()->get('isFeatured');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFeatured'");
    }

    /**
     * Gets the largeIcon property value. The large icon, to be displayed in the app details and used for upload of the icon.
     * @return MimeContent|null
    */
    public function getLargeIcon(): ?MimeContent {
        $val = $this->getBackingStore()->get('largeIcon');
        if (is_null($val) || $val instanceof MimeContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'largeIcon'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the app was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the notes property value. Notes for the app.
     * @return string|null
    */
    public function getNotes(): ?string {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the owner property value. The owner of the app.
     * @return string|null
    */
    public function getOwner(): ?string {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Gets the privacyInformationUrl property value. The privacy statement Url.
     * @return string|null
    */
    public function getPrivacyInformationUrl(): ?string {
        $val = $this->getBackingStore()->get('privacyInformationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyInformationUrl'");
    }

    /**
     * Gets the publisher property value. The publisher of the app.
     * @return string|null
    */
    public function getPublisher(): ?string {
        $val = $this->getBackingStore()->get('publisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisher'");
    }

    /**
     * Gets the publishingState property value. Indicates the publishing state of an app.
     * @return MobileAppPublishingState|null
    */
    public function getPublishingState(): ?MobileAppPublishingState {
        $val = $this->getBackingStore()->get('publishingState');
        if (is_null($val) || $val instanceof MobileAppPublishingState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishingState'");
    }

    /**
     * Gets the relationships property value. List of relationships for this mobile app.
     * @return array<MobileAppRelationship>|null
    */
    public function getRelationships(): ?array {
        $val = $this->getBackingStore()->get('relationships');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppRelationship::class);
            /** @var array<MobileAppRelationship>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relationships'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of scope tag ids for this mobile app.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the supersededAppCount property value. The total number of apps this app is directly or indirectly superseded by.
     * @return int|null
    */
    public function getSupersededAppCount(): ?int {
        $val = $this->getBackingStore()->get('supersededAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supersededAppCount'");
    }

    /**
     * Gets the supersedingAppCount property value. The total number of apps this app directly or indirectly supersedes.
     * @return int|null
    */
    public function getSupersedingAppCount(): ?int {
        $val = $this->getBackingStore()->get('supersedingAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supersedingAppCount'");
    }

    /**
     * Gets the uploadState property value. The upload state.
     * @return int|null
    */
    public function getUploadState(): ?int {
        $val = $this->getBackingStore()->get('uploadState');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uploadState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeCollectionOfObjectValues('categories', $this->getCategories());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('dependentAppCount', $this->getDependentAppCount());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('developer', $this->getDeveloper());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('informationUrl', $this->getInformationUrl());
        $writer->writeBooleanValue('isAssigned', $this->getIsAssigned());
        $writer->writeBooleanValue('isFeatured', $this->getIsFeatured());
        $writer->writeObjectValue('largeIcon', $this->getLargeIcon());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeStringValue('privacyInformationUrl', $this->getPrivacyInformationUrl());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeEnumValue('publishingState', $this->getPublishingState());
        $writer->writeCollectionOfObjectValues('relationships', $this->getRelationships());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeIntegerValue('supersededAppCount', $this->getSupersededAppCount());
        $writer->writeIntegerValue('supersedingAppCount', $this->getSupersedingAppCount());
        $writer->writeIntegerValue('uploadState', $this->getUploadState());
    }

    /**
     * Sets the assignments property value. The list of group assignments for this mobile app.
     * @param array<MobileAppAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the categories property value. The list of categories for this app.
     * @param array<MobileAppCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the app was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the dependentAppCount property value. The total number of dependencies the child app has.
     * @param int|null $value Value to set for the dependentAppCount property.
    */
    public function setDependentAppCount(?int $value): void {
        $this->getBackingStore()->set('dependentAppCount', $value);
    }

    /**
     * Sets the description property value. The description of the app.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the developer property value. The developer of the app.
     * @param string|null $value Value to set for the developer property.
    */
    public function setDeveloper(?string $value): void {
        $this->getBackingStore()->set('developer', $value);
    }

    /**
     * Sets the displayName property value. The admin provided or imported title of the app.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the informationUrl property value. The more information Url.
     * @param string|null $value Value to set for the informationUrl property.
    */
    public function setInformationUrl(?string $value): void {
        $this->getBackingStore()->set('informationUrl', $value);
    }

    /**
     * Sets the isAssigned property value. The value indicating whether the app is assigned to at least one group.
     * @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value): void {
        $this->getBackingStore()->set('isAssigned', $value);
    }

    /**
     * Sets the isFeatured property value. The value indicating whether the app is marked as featured by the admin.
     * @param bool|null $value Value to set for the isFeatured property.
    */
    public function setIsFeatured(?bool $value): void {
        $this->getBackingStore()->set('isFeatured', $value);
    }

    /**
     * Sets the largeIcon property value. The large icon, to be displayed in the app details and used for upload of the icon.
     * @param MimeContent|null $value Value to set for the largeIcon property.
    */
    public function setLargeIcon(?MimeContent $value): void {
        $this->getBackingStore()->set('largeIcon', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the app was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the notes property value. Notes for the app.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the owner property value. The owner of the app.
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the privacyInformationUrl property value. The privacy statement Url.
     * @param string|null $value Value to set for the privacyInformationUrl property.
    */
    public function setPrivacyInformationUrl(?string $value): void {
        $this->getBackingStore()->set('privacyInformationUrl', $value);
    }

    /**
     * Sets the publisher property value. The publisher of the app.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the publishingState property value. Indicates the publishing state of an app.
     * @param MobileAppPublishingState|null $value Value to set for the publishingState property.
    */
    public function setPublishingState(?MobileAppPublishingState $value): void {
        $this->getBackingStore()->set('publishingState', $value);
    }

    /**
     * Sets the relationships property value. List of relationships for this mobile app.
     * @param array<MobileAppRelationship>|null $value Value to set for the relationships property.
    */
    public function setRelationships(?array $value): void {
        $this->getBackingStore()->set('relationships', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of scope tag ids for this mobile app.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the supersededAppCount property value. The total number of apps this app is directly or indirectly superseded by.
     * @param int|null $value Value to set for the supersededAppCount property.
    */
    public function setSupersededAppCount(?int $value): void {
        $this->getBackingStore()->set('supersededAppCount', $value);
    }

    /**
     * Sets the supersedingAppCount property value. The total number of apps this app directly or indirectly supersedes.
     * @param int|null $value Value to set for the supersedingAppCount property.
    */
    public function setSupersedingAppCount(?int $value): void {
        $this->getBackingStore()->set('supersedingAppCount', $value);
    }

    /**
     * Sets the uploadState property value. The upload state.
     * @param int|null $value Value to set for the uploadState property.
    */
    public function setUploadState(?int $value): void {
        $this->getBackingStore()->set('uploadState', $value);
    }

}
