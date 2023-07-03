<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceEnrollmentNotificationConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * Instantiates a new DeviceEnrollmentNotificationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceEnrollmentNotificationConfiguration');
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
     * Gets the brandingOptions property value. Branding Options for the Message Template. Branding is defined in the Intune Admin Console.
     * @return EnrollmentNotificationBrandingOptions|null
    */
    public function getBrandingOptions(): ?EnrollmentNotificationBrandingOptions {
        $val = $this->getBackingStore()->get('brandingOptions');
        if (is_null($val) || $val instanceof EnrollmentNotificationBrandingOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'brandingOptions'");
    }

    /**
     * Gets the defaultLocale property value. DefaultLocale for the Enrollment Notification
     * @return string|null
    */
    public function getDefaultLocale(): ?string {
        $val = $this->getBackingStore()->get('defaultLocale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultLocale'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'brandingOptions' => fn(ParseNode $n) => $o->setBrandingOptions($n->getEnumValue(EnrollmentNotificationBrandingOptions::class)),
            'defaultLocale' => fn(ParseNode $n) => $o->setDefaultLocale($n->getStringValue()),
            'notificationMessageTemplateId' => fn(ParseNode $n) => $o->setNotificationMessageTemplateId($n->getStringValue()),
            'notificationTemplates' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNotificationTemplates($val);
            },
            'platformType' => fn(ParseNode $n) => $o->setPlatformType($n->getEnumValue(EnrollmentRestrictionPlatformType::class)),
            'templateType' => fn(ParseNode $n) => $o->setTemplateType($n->getEnumValue(EnrollmentNotificationTemplateType::class)),
        ]);
    }

    /**
     * Gets the notificationMessageTemplateId property value. Notification Message Template Id
     * @return string|null
    */
    public function getNotificationMessageTemplateId(): ?string {
        $val = $this->getBackingStore()->get('notificationMessageTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationMessageTemplateId'");
    }

    /**
     * Gets the notificationTemplates property value. The list of notification data -
     * @return array<string>|null
    */
    public function getNotificationTemplates(): ?array {
        $val = $this->getBackingStore()->get('notificationTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationTemplates'");
    }

    /**
     * Gets the platformType property value. This enum indicates the platform type for which the enrollment restriction applies.
     * @return EnrollmentRestrictionPlatformType|null
    */
    public function getPlatformType(): ?EnrollmentRestrictionPlatformType {
        $val = $this->getBackingStore()->get('platformType');
        if (is_null($val) || $val instanceof EnrollmentRestrictionPlatformType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platformType'");
    }

    /**
     * Gets the templateType property value. This enum indicates the Template type for which the enrollment notification applies.
     * @return EnrollmentNotificationTemplateType|null
    */
    public function getTemplateType(): ?EnrollmentNotificationTemplateType {
        $val = $this->getBackingStore()->get('templateType');
        if (is_null($val) || $val instanceof EnrollmentNotificationTemplateType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('brandingOptions', $this->getBrandingOptions());
        $writer->writeStringValue('defaultLocale', $this->getDefaultLocale());
        $writer->writeStringValue('notificationMessageTemplateId', $this->getNotificationMessageTemplateId());
        $writer->writeCollectionOfPrimitiveValues('notificationTemplates', $this->getNotificationTemplates());
        $writer->writeEnumValue('platformType', $this->getPlatformType());
        $writer->writeEnumValue('templateType', $this->getTemplateType());
    }

    /**
     * Sets the brandingOptions property value. Branding Options for the Message Template. Branding is defined in the Intune Admin Console.
     * @param EnrollmentNotificationBrandingOptions|null $value Value to set for the brandingOptions property.
    */
    public function setBrandingOptions(?EnrollmentNotificationBrandingOptions $value): void {
        $this->getBackingStore()->set('brandingOptions', $value);
    }

    /**
     * Sets the defaultLocale property value. DefaultLocale for the Enrollment Notification
     * @param string|null $value Value to set for the defaultLocale property.
    */
    public function setDefaultLocale(?string $value): void {
        $this->getBackingStore()->set('defaultLocale', $value);
    }

    /**
     * Sets the notificationMessageTemplateId property value. Notification Message Template Id
     * @param string|null $value Value to set for the notificationMessageTemplateId property.
    */
    public function setNotificationMessageTemplateId(?string $value): void {
        $this->getBackingStore()->set('notificationMessageTemplateId', $value);
    }

    /**
     * Sets the notificationTemplates property value. The list of notification data -
     * @param array<string>|null $value Value to set for the notificationTemplates property.
    */
    public function setNotificationTemplates(?array $value): void {
        $this->getBackingStore()->set('notificationTemplates', $value);
    }

    /**
     * Sets the platformType property value. This enum indicates the platform type for which the enrollment restriction applies.
     * @param EnrollmentRestrictionPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?EnrollmentRestrictionPlatformType $value): void {
        $this->getBackingStore()->set('platformType', $value);
    }

    /**
     * Sets the templateType property value. This enum indicates the Template type for which the enrollment notification applies.
     * @param EnrollmentNotificationTemplateType|null $value Value to set for the templateType property.
    */
    public function setTemplateType(?EnrollmentNotificationTemplateType $value): void {
        $this->getBackingStore()->set('templateType', $value);
    }

}
