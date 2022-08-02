<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualAppointment extends Entity implements Parsable 
{
    /**
     * @var string|null $appointmentClientJoinWebUrl The join web URL of the virtual appointment for clients with waiting room and browser join. Optional.
    */
    private ?string $appointmentClientJoinWebUrl = null;
    
    /**
     * @var array<VirtualAppointmentUser>|null $appointmentClients The client information for the virtual appointment, including name, email, and SMS phone number. Optional.
    */
    private ?array $appointmentClients = null;
    
    /**
     * @var string|null $externalAppointmentId The identifier of the appointment from the scheduling system, associated with the current virtual appointment. Optional.
    */
    private ?string $externalAppointmentId = null;
    
    /**
     * @var string|null $externalAppointmentUrl The URL of the appointment resource from the scheduling system, associated with the current virtual appointment. Optional.
    */
    private ?string $externalAppointmentUrl = null;
    
    /**
     * @var VirtualAppointmentSettings|null $settings The settings associated with the virtual appointment resource. Optional.
    */
    private ?VirtualAppointmentSettings $settings = null;
    
    /**
     * Instantiates a new virtualAppointment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.virtualAppointment');
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
        return $this->appointmentClientJoinWebUrl;
    }

    /**
     * Gets the appointmentClients property value. The client information for the virtual appointment, including name, email, and SMS phone number. Optional.
     * @return array<VirtualAppointmentUser>|null
    */
    public function getAppointmentClients(): ?array {
        return $this->appointmentClients;
    }

    /**
     * Gets the externalAppointmentId property value. The identifier of the appointment from the scheduling system, associated with the current virtual appointment. Optional.
     * @return string|null
    */
    public function getExternalAppointmentId(): ?string {
        return $this->externalAppointmentId;
    }

    /**
     * Gets the externalAppointmentUrl property value. The URL of the appointment resource from the scheduling system, associated with the current virtual appointment. Optional.
     * @return string|null
    */
    public function getExternalAppointmentUrl(): ?string {
        return $this->externalAppointmentUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appointmentClientJoinWebUrl' => function (ParseNode $n) use ($o) { $o->setAppointmentClientJoinWebUrl($n->getStringValue()); },
            'appointmentClients' => function (ParseNode $n) use ($o) { $o->setAppointmentClients($n->getCollectionOfObjectValues(array(VirtualAppointmentUser::class, 'createFromDiscriminatorValue'))); },
            'externalAppointmentId' => function (ParseNode $n) use ($o) { $o->setExternalAppointmentId($n->getStringValue()); },
            'externalAppointmentUrl' => function (ParseNode $n) use ($o) { $o->setExternalAppointmentUrl($n->getStringValue()); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(VirtualAppointmentSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the settings property value. The settings associated with the virtual appointment resource. Optional.
     * @return VirtualAppointmentSettings|null
    */
    public function getSettings(): ?VirtualAppointmentSettings {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appointmentClientJoinWebUrl', $this->appointmentClientJoinWebUrl);
        $writer->writeCollectionOfObjectValues('appointmentClients', $this->appointmentClients);
        $writer->writeStringValue('externalAppointmentId', $this->externalAppointmentId);
        $writer->writeStringValue('externalAppointmentUrl', $this->externalAppointmentUrl);
        $writer->writeObjectValue('settings', $this->settings);
    }

    /**
     * Sets the appointmentClientJoinWebUrl property value. The join web URL of the virtual appointment for clients with waiting room and browser join. Optional.
     *  @param string|null $value Value to set for the appointmentClientJoinWebUrl property.
    */
    public function setAppointmentClientJoinWebUrl(?string $value ): void {
        $this->appointmentClientJoinWebUrl = $value;
    }

    /**
     * Sets the appointmentClients property value. The client information for the virtual appointment, including name, email, and SMS phone number. Optional.
     *  @param array<VirtualAppointmentUser>|null $value Value to set for the appointmentClients property.
    */
    public function setAppointmentClients(?array $value ): void {
        $this->appointmentClients = $value;
    }

    /**
     * Sets the externalAppointmentId property value. The identifier of the appointment from the scheduling system, associated with the current virtual appointment. Optional.
     *  @param string|null $value Value to set for the externalAppointmentId property.
    */
    public function setExternalAppointmentId(?string $value ): void {
        $this->externalAppointmentId = $value;
    }

    /**
     * Sets the externalAppointmentUrl property value. The URL of the appointment resource from the scheduling system, associated with the current virtual appointment. Optional.
     *  @param string|null $value Value to set for the externalAppointmentUrl property.
    */
    public function setExternalAppointmentUrl(?string $value ): void {
        $this->externalAppointmentUrl = $value;
    }

    /**
     * Sets the settings property value. The settings associated with the virtual appointment resource. Optional.
     *  @param VirtualAppointmentSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?VirtualAppointmentSettings $value ): void {
        $this->settings = $value;
    }

}
