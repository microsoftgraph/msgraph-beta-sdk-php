<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualAppointment extends Entity implements Parsable 
{
    /**
     * Instantiates a new virtualAppointment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualAppointment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualAppointment {
        return new VirtualAppointment();
    }

    /**
     * Gets the appointmentClientJoinWebUrl property value. The join web URL of the virtual appointment for clients with waiting room and browser join. Optional.
     * @return string|null
    */
    public function getAppointmentClientJoinWebUrl(): ?string {
        $val = $this->getBackingStore()->get('appointmentClientJoinWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appointmentClientJoinWebUrl'");
    }

    /**
     * Gets the appointmentClients property value. The client information for the virtual appointment, including name, email, and SMS phone number. Optional.
     * @return array<VirtualAppointmentUser>|null
    */
    public function getAppointmentClients(): ?array {
        $val = $this->getBackingStore()->get('appointmentClients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualAppointmentUser::class);
            /** @var array<VirtualAppointmentUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appointmentClients'");
    }

    /**
     * Gets the externalAppointmentId property value. The identifier of the appointment from the scheduling system, associated with the current virtual appointment. Optional.
     * @return string|null
    */
    public function getExternalAppointmentId(): ?string {
        $val = $this->getBackingStore()->get('externalAppointmentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalAppointmentId'");
    }

    /**
     * Gets the externalAppointmentUrl property value. The URL of the appointment resource from the scheduling system, associated with the current virtual appointment. Optional.
     * @return string|null
    */
    public function getExternalAppointmentUrl(): ?string {
        $val = $this->getBackingStore()->get('externalAppointmentUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalAppointmentUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appointmentClientJoinWebUrl' => fn(ParseNode $n) => $o->setAppointmentClientJoinWebUrl($n->getStringValue()),
            'appointmentClients' => fn(ParseNode $n) => $o->setAppointmentClients($n->getCollectionOfObjectValues([VirtualAppointmentUser::class, 'createFromDiscriminatorValue'])),
            'externalAppointmentId' => fn(ParseNode $n) => $o->setExternalAppointmentId($n->getStringValue()),
            'externalAppointmentUrl' => fn(ParseNode $n) => $o->setExternalAppointmentUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([VirtualAppointmentSettings::class, 'createFromDiscriminatorValue'])),
        ]);
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
     * Gets the settings property value. The settings associated with the virtual appointment resource. Optional.
     * @return VirtualAppointmentSettings|null
    */
    public function getSettings(): ?VirtualAppointmentSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof VirtualAppointmentSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appointmentClientJoinWebUrl', $this->getAppointmentClientJoinWebUrl());
        $writer->writeCollectionOfObjectValues('appointmentClients', $this->getAppointmentClients());
        $writer->writeStringValue('externalAppointmentId', $this->getExternalAppointmentId());
        $writer->writeStringValue('externalAppointmentUrl', $this->getExternalAppointmentUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the appointmentClientJoinWebUrl property value. The join web URL of the virtual appointment for clients with waiting room and browser join. Optional.
     * @param string|null $value Value to set for the appointmentClientJoinWebUrl property.
    */
    public function setAppointmentClientJoinWebUrl(?string $value): void {
        $this->getBackingStore()->set('appointmentClientJoinWebUrl', $value);
    }

    /**
     * Sets the appointmentClients property value. The client information for the virtual appointment, including name, email, and SMS phone number. Optional.
     * @param array<VirtualAppointmentUser>|null $value Value to set for the appointmentClients property.
    */
    public function setAppointmentClients(?array $value): void {
        $this->getBackingStore()->set('appointmentClients', $value);
    }

    /**
     * Sets the externalAppointmentId property value. The identifier of the appointment from the scheduling system, associated with the current virtual appointment. Optional.
     * @param string|null $value Value to set for the externalAppointmentId property.
    */
    public function setExternalAppointmentId(?string $value): void {
        $this->getBackingStore()->set('externalAppointmentId', $value);
    }

    /**
     * Sets the externalAppointmentUrl property value. The URL of the appointment resource from the scheduling system, associated with the current virtual appointment. Optional.
     * @param string|null $value Value to set for the externalAppointmentUrl property.
    */
    public function setExternalAppointmentUrl(?string $value): void {
        $this->getBackingStore()->set('externalAppointmentUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the settings property value. The settings associated with the virtual appointment resource. Optional.
     * @param VirtualAppointmentSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?VirtualAppointmentSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
