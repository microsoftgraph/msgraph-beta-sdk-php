<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents per-process privacy preferences.
*/
class MacOSPrivacyAccessControlItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new macOSPrivacyAccessControlItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSPrivacyAccessControlItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSPrivacyAccessControlItem {
        return new MacOSPrivacyAccessControlItem();
    }

    /**
     * Gets the accessibility property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAccessibility(): ?Enablement {
        $val = $this->getBackingStore()->get('accessibility');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessibility'");
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the addressBook property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAddressBook(): ?Enablement {
        $val = $this->getBackingStore()->get('addressBook');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addressBook'");
    }

    /**
     * Gets the appleEventsAllowedReceivers property value. Allow or deny the app or process to send a restricted Apple event to another app or process. You will need to know the identifier, identifier type, and code requirement of the receiving app or process. This collection can contain a maximum of 500 elements.
     * @return array<MacOSAppleEventReceiver>|null
    */
    public function getAppleEventsAllowedReceivers(): ?array {
        $val = $this->getBackingStore()->get('appleEventsAllowedReceivers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MacOSAppleEventReceiver::class);
            /** @var array<MacOSAppleEventReceiver>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appleEventsAllowedReceivers'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the blockCamera property value. Block access to camera app.
     * @return bool|null
    */
    public function getBlockCamera(): ?bool {
        $val = $this->getBackingStore()->get('blockCamera');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockCamera'");
    }

    /**
     * Gets the blockListenEvent property value. Block the app or process from listening to events from input devices such as mouse, keyboard, and trackpad.Requires macOS 10.15 or later.
     * @return bool|null
    */
    public function getBlockListenEvent(): ?bool {
        $val = $this->getBackingStore()->get('blockListenEvent');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockListenEvent'");
    }

    /**
     * Gets the blockMicrophone property value. Block access to microphone.
     * @return bool|null
    */
    public function getBlockMicrophone(): ?bool {
        $val = $this->getBackingStore()->get('blockMicrophone');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockMicrophone'");
    }

    /**
     * Gets the blockScreenCapture property value. Block app from capturing contents of system display. Requires macOS 10.15 or later.
     * @return bool|null
    */
    public function getBlockScreenCapture(): ?bool {
        $val = $this->getBackingStore()->get('blockScreenCapture');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockScreenCapture'");
    }

    /**
     * Gets the calendar property value. Possible values of a property
     * @return Enablement|null
    */
    public function getCalendar(): ?Enablement {
        $val = $this->getBackingStore()->get('calendar');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendar'");
    }

    /**
     * Gets the codeRequirement property value. Enter the code requirement, which can be obtained with the command 'codesign –display -r –' in the Terminal app. Include everything after '=>'.
     * @return string|null
    */
    public function getCodeRequirement(): ?string {
        $val = $this->getBackingStore()->get('codeRequirement');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'codeRequirement'");
    }

    /**
     * Gets the displayName property value. The display name of the app, process, or executable.
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
        return  [
            'accessibility' => fn(ParseNode $n) => $o->setAccessibility($n->getEnumValue(Enablement::class)),
            'addressBook' => fn(ParseNode $n) => $o->setAddressBook($n->getEnumValue(Enablement::class)),
            'appleEventsAllowedReceivers' => fn(ParseNode $n) => $o->setAppleEventsAllowedReceivers($n->getCollectionOfObjectValues([MacOSAppleEventReceiver::class, 'createFromDiscriminatorValue'])),
            'blockCamera' => fn(ParseNode $n) => $o->setBlockCamera($n->getBooleanValue()),
            'blockListenEvent' => fn(ParseNode $n) => $o->setBlockListenEvent($n->getBooleanValue()),
            'blockMicrophone' => fn(ParseNode $n) => $o->setBlockMicrophone($n->getBooleanValue()),
            'blockScreenCapture' => fn(ParseNode $n) => $o->setBlockScreenCapture($n->getBooleanValue()),
            'calendar' => fn(ParseNode $n) => $o->setCalendar($n->getEnumValue(Enablement::class)),
            'codeRequirement' => fn(ParseNode $n) => $o->setCodeRequirement($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'fileProviderPresence' => fn(ParseNode $n) => $o->setFileProviderPresence($n->getEnumValue(Enablement::class)),
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getStringValue()),
            'identifierType' => fn(ParseNode $n) => $o->setIdentifierType($n->getEnumValue(MacOSProcessIdentifierType::class)),
            'mediaLibrary' => fn(ParseNode $n) => $o->setMediaLibrary($n->getEnumValue(Enablement::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'photos' => fn(ParseNode $n) => $o->setPhotos($n->getEnumValue(Enablement::class)),
            'postEvent' => fn(ParseNode $n) => $o->setPostEvent($n->getEnumValue(Enablement::class)),
            'reminders' => fn(ParseNode $n) => $o->setReminders($n->getEnumValue(Enablement::class)),
            'speechRecognition' => fn(ParseNode $n) => $o->setSpeechRecognition($n->getEnumValue(Enablement::class)),
            'staticCodeValidation' => fn(ParseNode $n) => $o->setStaticCodeValidation($n->getBooleanValue()),
            'systemPolicyAllFiles' => fn(ParseNode $n) => $o->setSystemPolicyAllFiles($n->getEnumValue(Enablement::class)),
            'systemPolicyDesktopFolder' => fn(ParseNode $n) => $o->setSystemPolicyDesktopFolder($n->getEnumValue(Enablement::class)),
            'systemPolicyDocumentsFolder' => fn(ParseNode $n) => $o->setSystemPolicyDocumentsFolder($n->getEnumValue(Enablement::class)),
            'systemPolicyDownloadsFolder' => fn(ParseNode $n) => $o->setSystemPolicyDownloadsFolder($n->getEnumValue(Enablement::class)),
            'systemPolicyNetworkVolumes' => fn(ParseNode $n) => $o->setSystemPolicyNetworkVolumes($n->getEnumValue(Enablement::class)),
            'systemPolicyRemovableVolumes' => fn(ParseNode $n) => $o->setSystemPolicyRemovableVolumes($n->getEnumValue(Enablement::class)),
            'systemPolicySystemAdminFiles' => fn(ParseNode $n) => $o->setSystemPolicySystemAdminFiles($n->getEnumValue(Enablement::class)),
        ];
    }

    /**
     * Gets the fileProviderPresence property value. Possible values of a property
     * @return Enablement|null
    */
    public function getFileProviderPresence(): ?Enablement {
        $val = $this->getBackingStore()->get('fileProviderPresence');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileProviderPresence'");
    }

    /**
     * Gets the identifier property value. The bundle ID or path of the app, process, or executable.
     * @return string|null
    */
    public function getIdentifier(): ?string {
        $val = $this->getBackingStore()->get('identifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifier'");
    }

    /**
     * Gets the identifierType property value. Process identifier types for MacOS Privacy Preferences
     * @return MacOSProcessIdentifierType|null
    */
    public function getIdentifierType(): ?MacOSProcessIdentifierType {
        $val = $this->getBackingStore()->get('identifierType');
        if (is_null($val) || $val instanceof MacOSProcessIdentifierType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifierType'");
    }

    /**
     * Gets the mediaLibrary property value. Possible values of a property
     * @return Enablement|null
    */
    public function getMediaLibrary(): ?Enablement {
        $val = $this->getBackingStore()->get('mediaLibrary');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaLibrary'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the photos property value. Possible values of a property
     * @return Enablement|null
    */
    public function getPhotos(): ?Enablement {
        $val = $this->getBackingStore()->get('photos');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'photos'");
    }

    /**
     * Gets the postEvent property value. Possible values of a property
     * @return Enablement|null
    */
    public function getPostEvent(): ?Enablement {
        $val = $this->getBackingStore()->get('postEvent');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postEvent'");
    }

    /**
     * Gets the reminders property value. Possible values of a property
     * @return Enablement|null
    */
    public function getReminders(): ?Enablement {
        $val = $this->getBackingStore()->get('reminders');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reminders'");
    }

    /**
     * Gets the speechRecognition property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSpeechRecognition(): ?Enablement {
        $val = $this->getBackingStore()->get('speechRecognition');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'speechRecognition'");
    }

    /**
     * Gets the staticCodeValidation property value. Statically validates the code requirement. Use this setting if the process invalidates its dynamic code signature.
     * @return bool|null
    */
    public function getStaticCodeValidation(): ?bool {
        $val = $this->getBackingStore()->get('staticCodeValidation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'staticCodeValidation'");
    }

    /**
     * Gets the systemPolicyAllFiles property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyAllFiles(): ?Enablement {
        $val = $this->getBackingStore()->get('systemPolicyAllFiles');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemPolicyAllFiles'");
    }

    /**
     * Gets the systemPolicyDesktopFolder property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyDesktopFolder(): ?Enablement {
        $val = $this->getBackingStore()->get('systemPolicyDesktopFolder');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemPolicyDesktopFolder'");
    }

    /**
     * Gets the systemPolicyDocumentsFolder property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyDocumentsFolder(): ?Enablement {
        $val = $this->getBackingStore()->get('systemPolicyDocumentsFolder');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemPolicyDocumentsFolder'");
    }

    /**
     * Gets the systemPolicyDownloadsFolder property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyDownloadsFolder(): ?Enablement {
        $val = $this->getBackingStore()->get('systemPolicyDownloadsFolder');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemPolicyDownloadsFolder'");
    }

    /**
     * Gets the systemPolicyNetworkVolumes property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyNetworkVolumes(): ?Enablement {
        $val = $this->getBackingStore()->get('systemPolicyNetworkVolumes');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemPolicyNetworkVolumes'");
    }

    /**
     * Gets the systemPolicyRemovableVolumes property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyRemovableVolumes(): ?Enablement {
        $val = $this->getBackingStore()->get('systemPolicyRemovableVolumes');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemPolicyRemovableVolumes'");
    }

    /**
     * Gets the systemPolicySystemAdminFiles property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicySystemAdminFiles(): ?Enablement {
        $val = $this->getBackingStore()->get('systemPolicySystemAdminFiles');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemPolicySystemAdminFiles'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessibility', $this->getAccessibility());
        $writer->writeEnumValue('addressBook', $this->getAddressBook());
        $writer->writeCollectionOfObjectValues('appleEventsAllowedReceivers', $this->getAppleEventsAllowedReceivers());
        $writer->writeBooleanValue('blockCamera', $this->getBlockCamera());
        $writer->writeBooleanValue('blockListenEvent', $this->getBlockListenEvent());
        $writer->writeBooleanValue('blockMicrophone', $this->getBlockMicrophone());
        $writer->writeBooleanValue('blockScreenCapture', $this->getBlockScreenCapture());
        $writer->writeEnumValue('calendar', $this->getCalendar());
        $writer->writeStringValue('codeRequirement', $this->getCodeRequirement());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('fileProviderPresence', $this->getFileProviderPresence());
        $writer->writeStringValue('identifier', $this->getIdentifier());
        $writer->writeEnumValue('identifierType', $this->getIdentifierType());
        $writer->writeEnumValue('mediaLibrary', $this->getMediaLibrary());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('photos', $this->getPhotos());
        $writer->writeEnumValue('postEvent', $this->getPostEvent());
        $writer->writeEnumValue('reminders', $this->getReminders());
        $writer->writeEnumValue('speechRecognition', $this->getSpeechRecognition());
        $writer->writeBooleanValue('staticCodeValidation', $this->getStaticCodeValidation());
        $writer->writeEnumValue('systemPolicyAllFiles', $this->getSystemPolicyAllFiles());
        $writer->writeEnumValue('systemPolicyDesktopFolder', $this->getSystemPolicyDesktopFolder());
        $writer->writeEnumValue('systemPolicyDocumentsFolder', $this->getSystemPolicyDocumentsFolder());
        $writer->writeEnumValue('systemPolicyDownloadsFolder', $this->getSystemPolicyDownloadsFolder());
        $writer->writeEnumValue('systemPolicyNetworkVolumes', $this->getSystemPolicyNetworkVolumes());
        $writer->writeEnumValue('systemPolicyRemovableVolumes', $this->getSystemPolicyRemovableVolumes());
        $writer->writeEnumValue('systemPolicySystemAdminFiles', $this->getSystemPolicySystemAdminFiles());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessibility property value. Possible values of a property
     * @param Enablement|null $value Value to set for the accessibility property.
    */
    public function setAccessibility(?Enablement $value): void {
        $this->getBackingStore()->set('accessibility', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the addressBook property value. Possible values of a property
     * @param Enablement|null $value Value to set for the addressBook property.
    */
    public function setAddressBook(?Enablement $value): void {
        $this->getBackingStore()->set('addressBook', $value);
    }

    /**
     * Sets the appleEventsAllowedReceivers property value. Allow or deny the app or process to send a restricted Apple event to another app or process. You will need to know the identifier, identifier type, and code requirement of the receiving app or process. This collection can contain a maximum of 500 elements.
     * @param array<MacOSAppleEventReceiver>|null $value Value to set for the appleEventsAllowedReceivers property.
    */
    public function setAppleEventsAllowedReceivers(?array $value): void {
        $this->getBackingStore()->set('appleEventsAllowedReceivers', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the blockCamera property value. Block access to camera app.
     * @param bool|null $value Value to set for the blockCamera property.
    */
    public function setBlockCamera(?bool $value): void {
        $this->getBackingStore()->set('blockCamera', $value);
    }

    /**
     * Sets the blockListenEvent property value. Block the app or process from listening to events from input devices such as mouse, keyboard, and trackpad.Requires macOS 10.15 or later.
     * @param bool|null $value Value to set for the blockListenEvent property.
    */
    public function setBlockListenEvent(?bool $value): void {
        $this->getBackingStore()->set('blockListenEvent', $value);
    }

    /**
     * Sets the blockMicrophone property value. Block access to microphone.
     * @param bool|null $value Value to set for the blockMicrophone property.
    */
    public function setBlockMicrophone(?bool $value): void {
        $this->getBackingStore()->set('blockMicrophone', $value);
    }

    /**
     * Sets the blockScreenCapture property value. Block app from capturing contents of system display. Requires macOS 10.15 or later.
     * @param bool|null $value Value to set for the blockScreenCapture property.
    */
    public function setBlockScreenCapture(?bool $value): void {
        $this->getBackingStore()->set('blockScreenCapture', $value);
    }

    /**
     * Sets the calendar property value. Possible values of a property
     * @param Enablement|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Enablement $value): void {
        $this->getBackingStore()->set('calendar', $value);
    }

    /**
     * Sets the codeRequirement property value. Enter the code requirement, which can be obtained with the command 'codesign –display -r –' in the Terminal app. Include everything after '=>'.
     * @param string|null $value Value to set for the codeRequirement property.
    */
    public function setCodeRequirement(?string $value): void {
        $this->getBackingStore()->set('codeRequirement', $value);
    }

    /**
     * Sets the displayName property value. The display name of the app, process, or executable.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the fileProviderPresence property value. Possible values of a property
     * @param Enablement|null $value Value to set for the fileProviderPresence property.
    */
    public function setFileProviderPresence(?Enablement $value): void {
        $this->getBackingStore()->set('fileProviderPresence', $value);
    }

    /**
     * Sets the identifier property value. The bundle ID or path of the app, process, or executable.
     * @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

    /**
     * Sets the identifierType property value. Process identifier types for MacOS Privacy Preferences
     * @param MacOSProcessIdentifierType|null $value Value to set for the identifierType property.
    */
    public function setIdentifierType(?MacOSProcessIdentifierType $value): void {
        $this->getBackingStore()->set('identifierType', $value);
    }

    /**
     * Sets the mediaLibrary property value. Possible values of a property
     * @param Enablement|null $value Value to set for the mediaLibrary property.
    */
    public function setMediaLibrary(?Enablement $value): void {
        $this->getBackingStore()->set('mediaLibrary', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the photos property value. Possible values of a property
     * @param Enablement|null $value Value to set for the photos property.
    */
    public function setPhotos(?Enablement $value): void {
        $this->getBackingStore()->set('photos', $value);
    }

    /**
     * Sets the postEvent property value. Possible values of a property
     * @param Enablement|null $value Value to set for the postEvent property.
    */
    public function setPostEvent(?Enablement $value): void {
        $this->getBackingStore()->set('postEvent', $value);
    }

    /**
     * Sets the reminders property value. Possible values of a property
     * @param Enablement|null $value Value to set for the reminders property.
    */
    public function setReminders(?Enablement $value): void {
        $this->getBackingStore()->set('reminders', $value);
    }

    /**
     * Sets the speechRecognition property value. Possible values of a property
     * @param Enablement|null $value Value to set for the speechRecognition property.
    */
    public function setSpeechRecognition(?Enablement $value): void {
        $this->getBackingStore()->set('speechRecognition', $value);
    }

    /**
     * Sets the staticCodeValidation property value. Statically validates the code requirement. Use this setting if the process invalidates its dynamic code signature.
     * @param bool|null $value Value to set for the staticCodeValidation property.
    */
    public function setStaticCodeValidation(?bool $value): void {
        $this->getBackingStore()->set('staticCodeValidation', $value);
    }

    /**
     * Sets the systemPolicyAllFiles property value. Possible values of a property
     * @param Enablement|null $value Value to set for the systemPolicyAllFiles property.
    */
    public function setSystemPolicyAllFiles(?Enablement $value): void {
        $this->getBackingStore()->set('systemPolicyAllFiles', $value);
    }

    /**
     * Sets the systemPolicyDesktopFolder property value. Possible values of a property
     * @param Enablement|null $value Value to set for the systemPolicyDesktopFolder property.
    */
    public function setSystemPolicyDesktopFolder(?Enablement $value): void {
        $this->getBackingStore()->set('systemPolicyDesktopFolder', $value);
    }

    /**
     * Sets the systemPolicyDocumentsFolder property value. Possible values of a property
     * @param Enablement|null $value Value to set for the systemPolicyDocumentsFolder property.
    */
    public function setSystemPolicyDocumentsFolder(?Enablement $value): void {
        $this->getBackingStore()->set('systemPolicyDocumentsFolder', $value);
    }

    /**
     * Sets the systemPolicyDownloadsFolder property value. Possible values of a property
     * @param Enablement|null $value Value to set for the systemPolicyDownloadsFolder property.
    */
    public function setSystemPolicyDownloadsFolder(?Enablement $value): void {
        $this->getBackingStore()->set('systemPolicyDownloadsFolder', $value);
    }

    /**
     * Sets the systemPolicyNetworkVolumes property value. Possible values of a property
     * @param Enablement|null $value Value to set for the systemPolicyNetworkVolumes property.
    */
    public function setSystemPolicyNetworkVolumes(?Enablement $value): void {
        $this->getBackingStore()->set('systemPolicyNetworkVolumes', $value);
    }

    /**
     * Sets the systemPolicyRemovableVolumes property value. Possible values of a property
     * @param Enablement|null $value Value to set for the systemPolicyRemovableVolumes property.
    */
    public function setSystemPolicyRemovableVolumes(?Enablement $value): void {
        $this->getBackingStore()->set('systemPolicyRemovableVolumes', $value);
    }

    /**
     * Sets the systemPolicySystemAdminFiles property value. Possible values of a property
     * @param Enablement|null $value Value to set for the systemPolicySystemAdminFiles property.
    */
    public function setSystemPolicySystemAdminFiles(?Enablement $value): void {
        $this->getBackingStore()->set('systemPolicySystemAdminFiles', $value);
    }

}
