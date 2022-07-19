<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSPrivacyAccessControlItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var Enablement|null $accessibility Possible values of a property
    */
    private ?Enablement $accessibility = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Enablement|null $addressBook Possible values of a property
    */
    private ?Enablement $addressBook = null;
    
    /**
     * @var array<MacOSAppleEventReceiver>|null $appleEventsAllowedReceivers Allow or deny the app or process to send a restricted Apple event to another app or process. You will need to know the identifier, identifier type, and code requirement of the receiving app or process. This collection can contain a maximum of 500 elements.
    */
    private ?array $appleEventsAllowedReceivers = null;
    
    /**
     * @var bool|null $blockCamera Block access to camera app.
    */
    private ?bool $blockCamera = null;
    
    /**
     * @var bool|null $blockListenEvent Block the app or process from listening to events from input devices such as mouse, keyboard, and trackpad.Requires macOS 10.15 or later.
    */
    private ?bool $blockListenEvent = null;
    
    /**
     * @var bool|null $blockMicrophone Block access to microphone.
    */
    private ?bool $blockMicrophone = null;
    
    /**
     * @var bool|null $blockScreenCapture Block app from capturing contents of system display. Requires macOS 10.15 or later.
    */
    private ?bool $blockScreenCapture = null;
    
    /**
     * @var Enablement|null $calendar Possible values of a property
    */
    private ?Enablement $calendar = null;
    
    /**
     * @var string|null $codeRequirement Enter the code requirement, which can be obtained with the command 'codesign –display -r –' in the Terminal app. Include everything after '=>'.
    */
    private ?string $codeRequirement = null;
    
    /**
     * @var string|null $displayName The display name of the app, process, or executable.
    */
    private ?string $displayName = null;
    
    /**
     * @var Enablement|null $fileProviderPresence Possible values of a property
    */
    private ?Enablement $fileProviderPresence = null;
    
    /**
     * @var string|null $identifier The bundle ID or path of the app, process, or executable.
    */
    private ?string $identifier = null;
    
    /**
     * @var MacOSProcessIdentifierType|null $identifierType Process identifier types for MacOS Privacy Preferences
    */
    private ?MacOSProcessIdentifierType $identifierType = null;
    
    /**
     * @var Enablement|null $mediaLibrary Possible values of a property
    */
    private ?Enablement $mediaLibrary = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var Enablement|null $photos Possible values of a property
    */
    private ?Enablement $photos = null;
    
    /**
     * @var Enablement|null $postEvent Possible values of a property
    */
    private ?Enablement $postEvent = null;
    
    /**
     * @var Enablement|null $reminders Possible values of a property
    */
    private ?Enablement $reminders = null;
    
    /**
     * @var Enablement|null $speechRecognition Possible values of a property
    */
    private ?Enablement $speechRecognition = null;
    
    /**
     * @var bool|null $staticCodeValidation Statically validates the code requirement. Use this setting if the process invalidates its dynamic code signature.
    */
    private ?bool $staticCodeValidation = null;
    
    /**
     * @var Enablement|null $systemPolicyAllFiles Possible values of a property
    */
    private ?Enablement $systemPolicyAllFiles = null;
    
    /**
     * @var Enablement|null $systemPolicyDesktopFolder Possible values of a property
    */
    private ?Enablement $systemPolicyDesktopFolder = null;
    
    /**
     * @var Enablement|null $systemPolicyDocumentsFolder Possible values of a property
    */
    private ?Enablement $systemPolicyDocumentsFolder = null;
    
    /**
     * @var Enablement|null $systemPolicyDownloadsFolder Possible values of a property
    */
    private ?Enablement $systemPolicyDownloadsFolder = null;
    
    /**
     * @var Enablement|null $systemPolicyNetworkVolumes Possible values of a property
    */
    private ?Enablement $systemPolicyNetworkVolumes = null;
    
    /**
     * @var Enablement|null $systemPolicyRemovableVolumes Possible values of a property
    */
    private ?Enablement $systemPolicyRemovableVolumes = null;
    
    /**
     * @var Enablement|null $systemPolicySystemAdminFiles Possible values of a property
    */
    private ?Enablement $systemPolicySystemAdminFiles = null;
    
    /**
     * Instantiates a new macOSPrivacyAccessControlItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.macOSPrivacyAccessControlItem');
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
        return $this->accessibility;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the addressBook property value. Possible values of a property
     * @return Enablement|null
    */
    public function getAddressBook(): ?Enablement {
        return $this->addressBook;
    }

    /**
     * Gets the appleEventsAllowedReceivers property value. Allow or deny the app or process to send a restricted Apple event to another app or process. You will need to know the identifier, identifier type, and code requirement of the receiving app or process. This collection can contain a maximum of 500 elements.
     * @return array<MacOSAppleEventReceiver>|null
    */
    public function getAppleEventsAllowedReceivers(): ?array {
        return $this->appleEventsAllowedReceivers;
    }

    /**
     * Gets the blockCamera property value. Block access to camera app.
     * @return bool|null
    */
    public function getBlockCamera(): ?bool {
        return $this->blockCamera;
    }

    /**
     * Gets the blockListenEvent property value. Block the app or process from listening to events from input devices such as mouse, keyboard, and trackpad.Requires macOS 10.15 or later.
     * @return bool|null
    */
    public function getBlockListenEvent(): ?bool {
        return $this->blockListenEvent;
    }

    /**
     * Gets the blockMicrophone property value. Block access to microphone.
     * @return bool|null
    */
    public function getBlockMicrophone(): ?bool {
        return $this->blockMicrophone;
    }

    /**
     * Gets the blockScreenCapture property value. Block app from capturing contents of system display. Requires macOS 10.15 or later.
     * @return bool|null
    */
    public function getBlockScreenCapture(): ?bool {
        return $this->blockScreenCapture;
    }

    /**
     * Gets the calendar property value. Possible values of a property
     * @return Enablement|null
    */
    public function getCalendar(): ?Enablement {
        return $this->calendar;
    }

    /**
     * Gets the codeRequirement property value. Enter the code requirement, which can be obtained with the command 'codesign –display -r –' in the Terminal app. Include everything after '=>'.
     * @return string|null
    */
    public function getCodeRequirement(): ?string {
        return $this->codeRequirement;
    }

    /**
     * Gets the displayName property value. The display name of the app, process, or executable.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessibility' => function (ParseNode $n) use ($o) { $o->setAccessibility($n->getEnumValue(Enablement::class)); },
            'addressBook' => function (ParseNode $n) use ($o) { $o->setAddressBook($n->getEnumValue(Enablement::class)); },
            'appleEventsAllowedReceivers' => function (ParseNode $n) use ($o) { $o->setAppleEventsAllowedReceivers($n->getCollectionOfObjectValues(array(MacOSAppleEventReceiver::class, 'createFromDiscriminatorValue'))); },
            'blockCamera' => function (ParseNode $n) use ($o) { $o->setBlockCamera($n->getBooleanValue()); },
            'blockListenEvent' => function (ParseNode $n) use ($o) { $o->setBlockListenEvent($n->getBooleanValue()); },
            'blockMicrophone' => function (ParseNode $n) use ($o) { $o->setBlockMicrophone($n->getBooleanValue()); },
            'blockScreenCapture' => function (ParseNode $n) use ($o) { $o->setBlockScreenCapture($n->getBooleanValue()); },
            'calendar' => function (ParseNode $n) use ($o) { $o->setCalendar($n->getEnumValue(Enablement::class)); },
            'codeRequirement' => function (ParseNode $n) use ($o) { $o->setCodeRequirement($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'fileProviderPresence' => function (ParseNode $n) use ($o) { $o->setFileProviderPresence($n->getEnumValue(Enablement::class)); },
            'identifier' => function (ParseNode $n) use ($o) { $o->setIdentifier($n->getStringValue()); },
            'identifierType' => function (ParseNode $n) use ($o) { $o->setIdentifierType($n->getEnumValue(MacOSProcessIdentifierType::class)); },
            'mediaLibrary' => function (ParseNode $n) use ($o) { $o->setMediaLibrary($n->getEnumValue(Enablement::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'photos' => function (ParseNode $n) use ($o) { $o->setPhotos($n->getEnumValue(Enablement::class)); },
            'postEvent' => function (ParseNode $n) use ($o) { $o->setPostEvent($n->getEnumValue(Enablement::class)); },
            'reminders' => function (ParseNode $n) use ($o) { $o->setReminders($n->getEnumValue(Enablement::class)); },
            'speechRecognition' => function (ParseNode $n) use ($o) { $o->setSpeechRecognition($n->getEnumValue(Enablement::class)); },
            'staticCodeValidation' => function (ParseNode $n) use ($o) { $o->setStaticCodeValidation($n->getBooleanValue()); },
            'systemPolicyAllFiles' => function (ParseNode $n) use ($o) { $o->setSystemPolicyAllFiles($n->getEnumValue(Enablement::class)); },
            'systemPolicyDesktopFolder' => function (ParseNode $n) use ($o) { $o->setSystemPolicyDesktopFolder($n->getEnumValue(Enablement::class)); },
            'systemPolicyDocumentsFolder' => function (ParseNode $n) use ($o) { $o->setSystemPolicyDocumentsFolder($n->getEnumValue(Enablement::class)); },
            'systemPolicyDownloadsFolder' => function (ParseNode $n) use ($o) { $o->setSystemPolicyDownloadsFolder($n->getEnumValue(Enablement::class)); },
            'systemPolicyNetworkVolumes' => function (ParseNode $n) use ($o) { $o->setSystemPolicyNetworkVolumes($n->getEnumValue(Enablement::class)); },
            'systemPolicyRemovableVolumes' => function (ParseNode $n) use ($o) { $o->setSystemPolicyRemovableVolumes($n->getEnumValue(Enablement::class)); },
            'systemPolicySystemAdminFiles' => function (ParseNode $n) use ($o) { $o->setSystemPolicySystemAdminFiles($n->getEnumValue(Enablement::class)); },
        ];
    }

    /**
     * Gets the fileProviderPresence property value. Possible values of a property
     * @return Enablement|null
    */
    public function getFileProviderPresence(): ?Enablement {
        return $this->fileProviderPresence;
    }

    /**
     * Gets the identifier property value. The bundle ID or path of the app, process, or executable.
     * @return string|null
    */
    public function getIdentifier(): ?string {
        return $this->identifier;
    }

    /**
     * Gets the identifierType property value. Process identifier types for MacOS Privacy Preferences
     * @return MacOSProcessIdentifierType|null
    */
    public function getIdentifierType(): ?MacOSProcessIdentifierType {
        return $this->identifierType;
    }

    /**
     * Gets the mediaLibrary property value. Possible values of a property
     * @return Enablement|null
    */
    public function getMediaLibrary(): ?Enablement {
        return $this->mediaLibrary;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the photos property value. Possible values of a property
     * @return Enablement|null
    */
    public function getPhotos(): ?Enablement {
        return $this->photos;
    }

    /**
     * Gets the postEvent property value. Possible values of a property
     * @return Enablement|null
    */
    public function getPostEvent(): ?Enablement {
        return $this->postEvent;
    }

    /**
     * Gets the reminders property value. Possible values of a property
     * @return Enablement|null
    */
    public function getReminders(): ?Enablement {
        return $this->reminders;
    }

    /**
     * Gets the speechRecognition property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSpeechRecognition(): ?Enablement {
        return $this->speechRecognition;
    }

    /**
     * Gets the staticCodeValidation property value. Statically validates the code requirement. Use this setting if the process invalidates its dynamic code signature.
     * @return bool|null
    */
    public function getStaticCodeValidation(): ?bool {
        return $this->staticCodeValidation;
    }

    /**
     * Gets the systemPolicyAllFiles property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyAllFiles(): ?Enablement {
        return $this->systemPolicyAllFiles;
    }

    /**
     * Gets the systemPolicyDesktopFolder property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyDesktopFolder(): ?Enablement {
        return $this->systemPolicyDesktopFolder;
    }

    /**
     * Gets the systemPolicyDocumentsFolder property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyDocumentsFolder(): ?Enablement {
        return $this->systemPolicyDocumentsFolder;
    }

    /**
     * Gets the systemPolicyDownloadsFolder property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyDownloadsFolder(): ?Enablement {
        return $this->systemPolicyDownloadsFolder;
    }

    /**
     * Gets the systemPolicyNetworkVolumes property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyNetworkVolumes(): ?Enablement {
        return $this->systemPolicyNetworkVolumes;
    }

    /**
     * Gets the systemPolicyRemovableVolumes property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicyRemovableVolumes(): ?Enablement {
        return $this->systemPolicyRemovableVolumes;
    }

    /**
     * Gets the systemPolicySystemAdminFiles property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSystemPolicySystemAdminFiles(): ?Enablement {
        return $this->systemPolicySystemAdminFiles;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessibility', $this->accessibility);
        $writer->writeEnumValue('addressBook', $this->addressBook);
        $writer->writeCollectionOfObjectValues('appleEventsAllowedReceivers', $this->appleEventsAllowedReceivers);
        $writer->writeBooleanValue('blockCamera', $this->blockCamera);
        $writer->writeBooleanValue('blockListenEvent', $this->blockListenEvent);
        $writer->writeBooleanValue('blockMicrophone', $this->blockMicrophone);
        $writer->writeBooleanValue('blockScreenCapture', $this->blockScreenCapture);
        $writer->writeEnumValue('calendar', $this->calendar);
        $writer->writeStringValue('codeRequirement', $this->codeRequirement);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('fileProviderPresence', $this->fileProviderPresence);
        $writer->writeStringValue('identifier', $this->identifier);
        $writer->writeEnumValue('identifierType', $this->identifierType);
        $writer->writeEnumValue('mediaLibrary', $this->mediaLibrary);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('photos', $this->photos);
        $writer->writeEnumValue('postEvent', $this->postEvent);
        $writer->writeEnumValue('reminders', $this->reminders);
        $writer->writeEnumValue('speechRecognition', $this->speechRecognition);
        $writer->writeBooleanValue('staticCodeValidation', $this->staticCodeValidation);
        $writer->writeEnumValue('systemPolicyAllFiles', $this->systemPolicyAllFiles);
        $writer->writeEnumValue('systemPolicyDesktopFolder', $this->systemPolicyDesktopFolder);
        $writer->writeEnumValue('systemPolicyDocumentsFolder', $this->systemPolicyDocumentsFolder);
        $writer->writeEnumValue('systemPolicyDownloadsFolder', $this->systemPolicyDownloadsFolder);
        $writer->writeEnumValue('systemPolicyNetworkVolumes', $this->systemPolicyNetworkVolumes);
        $writer->writeEnumValue('systemPolicyRemovableVolumes', $this->systemPolicyRemovableVolumes);
        $writer->writeEnumValue('systemPolicySystemAdminFiles', $this->systemPolicySystemAdminFiles);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessibility property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the accessibility property.
    */
    public function setAccessibility(?Enablement $value ): void {
        $this->accessibility = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the addressBook property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the addressBook property.
    */
    public function setAddressBook(?Enablement $value ): void {
        $this->addressBook = $value;
    }

    /**
     * Sets the appleEventsAllowedReceivers property value. Allow or deny the app or process to send a restricted Apple event to another app or process. You will need to know the identifier, identifier type, and code requirement of the receiving app or process. This collection can contain a maximum of 500 elements.
     *  @param array<MacOSAppleEventReceiver>|null $value Value to set for the appleEventsAllowedReceivers property.
    */
    public function setAppleEventsAllowedReceivers(?array $value ): void {
        $this->appleEventsAllowedReceivers = $value;
    }

    /**
     * Sets the blockCamera property value. Block access to camera app.
     *  @param bool|null $value Value to set for the blockCamera property.
    */
    public function setBlockCamera(?bool $value ): void {
        $this->blockCamera = $value;
    }

    /**
     * Sets the blockListenEvent property value. Block the app or process from listening to events from input devices such as mouse, keyboard, and trackpad.Requires macOS 10.15 or later.
     *  @param bool|null $value Value to set for the blockListenEvent property.
    */
    public function setBlockListenEvent(?bool $value ): void {
        $this->blockListenEvent = $value;
    }

    /**
     * Sets the blockMicrophone property value. Block access to microphone.
     *  @param bool|null $value Value to set for the blockMicrophone property.
    */
    public function setBlockMicrophone(?bool $value ): void {
        $this->blockMicrophone = $value;
    }

    /**
     * Sets the blockScreenCapture property value. Block app from capturing contents of system display. Requires macOS 10.15 or later.
     *  @param bool|null $value Value to set for the blockScreenCapture property.
    */
    public function setBlockScreenCapture(?bool $value ): void {
        $this->blockScreenCapture = $value;
    }

    /**
     * Sets the calendar property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Enablement $value ): void {
        $this->calendar = $value;
    }

    /**
     * Sets the codeRequirement property value. Enter the code requirement, which can be obtained with the command 'codesign –display -r –' in the Terminal app. Include everything after '=>'.
     *  @param string|null $value Value to set for the codeRequirement property.
    */
    public function setCodeRequirement(?string $value ): void {
        $this->codeRequirement = $value;
    }

    /**
     * Sets the displayName property value. The display name of the app, process, or executable.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the fileProviderPresence property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the fileProviderPresence property.
    */
    public function setFileProviderPresence(?Enablement $value ): void {
        $this->fileProviderPresence = $value;
    }

    /**
     * Sets the identifier property value. The bundle ID or path of the app, process, or executable.
     *  @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value ): void {
        $this->identifier = $value;
    }

    /**
     * Sets the identifierType property value. Process identifier types for MacOS Privacy Preferences
     *  @param MacOSProcessIdentifierType|null $value Value to set for the identifierType property.
    */
    public function setIdentifierType(?MacOSProcessIdentifierType $value ): void {
        $this->identifierType = $value;
    }

    /**
     * Sets the mediaLibrary property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the mediaLibrary property.
    */
    public function setMediaLibrary(?Enablement $value ): void {
        $this->mediaLibrary = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the photos property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the photos property.
    */
    public function setPhotos(?Enablement $value ): void {
        $this->photos = $value;
    }

    /**
     * Sets the postEvent property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the postEvent property.
    */
    public function setPostEvent(?Enablement $value ): void {
        $this->postEvent = $value;
    }

    /**
     * Sets the reminders property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the reminders property.
    */
    public function setReminders(?Enablement $value ): void {
        $this->reminders = $value;
    }

    /**
     * Sets the speechRecognition property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the speechRecognition property.
    */
    public function setSpeechRecognition(?Enablement $value ): void {
        $this->speechRecognition = $value;
    }

    /**
     * Sets the staticCodeValidation property value. Statically validates the code requirement. Use this setting if the process invalidates its dynamic code signature.
     *  @param bool|null $value Value to set for the staticCodeValidation property.
    */
    public function setStaticCodeValidation(?bool $value ): void {
        $this->staticCodeValidation = $value;
    }

    /**
     * Sets the systemPolicyAllFiles property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the systemPolicyAllFiles property.
    */
    public function setSystemPolicyAllFiles(?Enablement $value ): void {
        $this->systemPolicyAllFiles = $value;
    }

    /**
     * Sets the systemPolicyDesktopFolder property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the systemPolicyDesktopFolder property.
    */
    public function setSystemPolicyDesktopFolder(?Enablement $value ): void {
        $this->systemPolicyDesktopFolder = $value;
    }

    /**
     * Sets the systemPolicyDocumentsFolder property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the systemPolicyDocumentsFolder property.
    */
    public function setSystemPolicyDocumentsFolder(?Enablement $value ): void {
        $this->systemPolicyDocumentsFolder = $value;
    }

    /**
     * Sets the systemPolicyDownloadsFolder property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the systemPolicyDownloadsFolder property.
    */
    public function setSystemPolicyDownloadsFolder(?Enablement $value ): void {
        $this->systemPolicyDownloadsFolder = $value;
    }

    /**
     * Sets the systemPolicyNetworkVolumes property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the systemPolicyNetworkVolumes property.
    */
    public function setSystemPolicyNetworkVolumes(?Enablement $value ): void {
        $this->systemPolicyNetworkVolumes = $value;
    }

    /**
     * Sets the systemPolicyRemovableVolumes property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the systemPolicyRemovableVolumes property.
    */
    public function setSystemPolicyRemovableVolumes(?Enablement $value ): void {
        $this->systemPolicyRemovableVolumes = $value;
    }

    /**
     * Sets the systemPolicySystemAdminFiles property value. Possible values of a property
     *  @param Enablement|null $value Value to set for the systemPolicySystemAdminFiles property.
    */
    public function setSystemPolicySystemAdminFiles(?Enablement $value ): void {
        $this->systemPolicySystemAdminFiles = $value;
    }

}
