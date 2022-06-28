<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentNotificationConfiguration extends DeviceEnrollmentConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EnrollmentNotificationBrandingOptions|null $brandingOptions Branding Options for the Enrollment Notification. Possible values are: none, includeCompanyLogo, includeCompanyName, includeContactInformation, includeCompanyPortalLink, includeDeviceDetails.
    */
    private ?EnrollmentNotificationBrandingOptions $brandingOptions = null;
    
    /**
     * @var string|null $defaultLocale DefaultLocale for the Enrollment Notification
    */
    private ?string $defaultLocale = null;
    
    /**
     * @var string|null $notificationMessageTemplateId Notification Message Template Id
    */
    private ?string $notificationMessageTemplateId = null;
    
    /**
     * @var EnrollmentRestrictionPlatformType|null $platformType Platform type of the Enrollment Notification. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac.
    */
    private ?EnrollmentRestrictionPlatformType $platformType = null;
    
    /**
     * @var EnrollmentNotificationTemplateType|null $templateType Template type of the Enrollment Notification. Possible values are: email, push, unknownFutureValue.
    */
    private ?EnrollmentNotificationTemplateType $templateType = null;
    
    /**
     * Instantiates a new DeviceEnrollmentNotificationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEnrollmentNotificationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEnrollmentNotificationConfiguration {
        return new DeviceEnrollmentNotificationConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the brandingOptions property value. Branding Options for the Enrollment Notification. Possible values are: none, includeCompanyLogo, includeCompanyName, includeContactInformation, includeCompanyPortalLink, includeDeviceDetails.
     * @return EnrollmentNotificationBrandingOptions|null
    */
    public function getBrandingOptions(): ?EnrollmentNotificationBrandingOptions {
        return $this->brandingOptions;
    }

    /**
     * Gets the defaultLocale property value. DefaultLocale for the Enrollment Notification
     * @return string|null
    */
    public function getDefaultLocale(): ?string {
        return $this->defaultLocale;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'brandingOptions' => function (ParseNode $n) use ($o) { $o->setBrandingOptions($n->getEnumValue(EnrollmentNotificationBrandingOptions::class)); },
            'defaultLocale' => function (ParseNode $n) use ($o) { $o->setDefaultLocale($n->getStringValue()); },
            'notificationMessageTemplateId' => function (ParseNode $n) use ($o) { $o->setNotificationMessageTemplateId($n->getStringValue()); },
            'platformType' => function (ParseNode $n) use ($o) { $o->setPlatformType($n->getEnumValue(EnrollmentRestrictionPlatformType::class)); },
            'templateType' => function (ParseNode $n) use ($o) { $o->setTemplateType($n->getEnumValue(EnrollmentNotificationTemplateType::class)); },
        ]);
    }

    /**
     * Gets the notificationMessageTemplateId property value. Notification Message Template Id
     * @return string|null
    */
    public function getNotificationMessageTemplateId(): ?string {
        return $this->notificationMessageTemplateId;
    }

    /**
     * Gets the platformType property value. Platform type of the Enrollment Notification. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac.
     * @return EnrollmentRestrictionPlatformType|null
    */
    public function getPlatformType(): ?EnrollmentRestrictionPlatformType {
        return $this->platformType;
    }

    /**
     * Gets the templateType property value. Template type of the Enrollment Notification. Possible values are: email, push, unknownFutureValue.
     * @return EnrollmentNotificationTemplateType|null
    */
    public function getTemplateType(): ?EnrollmentNotificationTemplateType {
        return $this->templateType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('brandingOptions', $this->brandingOptions);
        $writer->writeStringValue('defaultLocale', $this->defaultLocale);
        $writer->writeStringValue('notificationMessageTemplateId', $this->notificationMessageTemplateId);
        $writer->writeEnumValue('platformType', $this->platformType);
        $writer->writeEnumValue('templateType', $this->templateType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the brandingOptions property value. Branding Options for the Enrollment Notification. Possible values are: none, includeCompanyLogo, includeCompanyName, includeContactInformation, includeCompanyPortalLink, includeDeviceDetails.
     *  @param EnrollmentNotificationBrandingOptions|null $value Value to set for the brandingOptions property.
    */
    public function setBrandingOptions(?EnrollmentNotificationBrandingOptions $value ): void {
        $this->brandingOptions = $value;
    }

    /**
     * Sets the defaultLocale property value. DefaultLocale for the Enrollment Notification
     *  @param string|null $value Value to set for the defaultLocale property.
    */
    public function setDefaultLocale(?string $value ): void {
        $this->defaultLocale = $value;
    }

    /**
     * Sets the notificationMessageTemplateId property value. Notification Message Template Id
     *  @param string|null $value Value to set for the notificationMessageTemplateId property.
    */
    public function setNotificationMessageTemplateId(?string $value ): void {
        $this->notificationMessageTemplateId = $value;
    }

    /**
     * Sets the platformType property value. Platform type of the Enrollment Notification. Possible values are: allPlatforms, ios, windows, windowsPhone, android, androidForWork, mac.
     *  @param EnrollmentRestrictionPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?EnrollmentRestrictionPlatformType $value ): void {
        $this->platformType = $value;
    }

    /**
     * Sets the templateType property value. Template type of the Enrollment Notification. Possible values are: email, push, unknownFutureValue.
     *  @param EnrollmentNotificationTemplateType|null $value Value to set for the templateType property.
    */
    public function setTemplateType(?EnrollmentNotificationTemplateType $value ): void {
        $this->templateType = $value;
    }

}
