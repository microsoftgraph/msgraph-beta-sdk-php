<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Remote assistance settings for the account
*/
class RemoteAssistanceSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new remoteAssistanceSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoteAssistanceSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoteAssistanceSettings {
        return new RemoteAssistanceSettings();
    }

    /**
     * Gets the allowSessionsToUnenrolledDevices property value. Indicates if sessions to unenrolled devices are allowed for the account. This setting is configurable by the admin. Default value is false.
     * @return bool|null
    */
    public function getAllowSessionsToUnenrolledDevices(): ?bool {
        $val = $this->getBackingStore()->get('allowSessionsToUnenrolledDevices');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowSessionsToUnenrolledDevices'");
    }

    /**
     * Gets the blockChat property value. Indicates if sessions to block chat function. This setting is configurable by the admin. Default value is false.
     * @return bool|null
    */
    public function getBlockChat(): ?bool {
        $val = $this->getBackingStore()->get('blockChat');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockChat'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowSessionsToUnenrolledDevices' => fn(ParseNode $n) => $o->setAllowSessionsToUnenrolledDevices($n->getBooleanValue()),
            'blockChat' => fn(ParseNode $n) => $o->setBlockChat($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remoteAssistanceState' => fn(ParseNode $n) => $o->setRemoteAssistanceState($n->getEnumValue(RemoteAssistanceState::class)),
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
     * Gets the remoteAssistanceState property value. State of remote assistance for the account
     * @return RemoteAssistanceState|null
    */
    public function getRemoteAssistanceState(): ?RemoteAssistanceState {
        $val = $this->getBackingStore()->get('remoteAssistanceState');
        if (is_null($val) || $val instanceof RemoteAssistanceState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteAssistanceState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowSessionsToUnenrolledDevices', $this->getAllowSessionsToUnenrolledDevices());
        $writer->writeBooleanValue('blockChat', $this->getBlockChat());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('remoteAssistanceState', $this->getRemoteAssistanceState());
    }

    /**
     * Sets the allowSessionsToUnenrolledDevices property value. Indicates if sessions to unenrolled devices are allowed for the account. This setting is configurable by the admin. Default value is false.
     * @param bool|null $value Value to set for the allowSessionsToUnenrolledDevices property.
    */
    public function setAllowSessionsToUnenrolledDevices(?bool $value): void {
        $this->getBackingStore()->set('allowSessionsToUnenrolledDevices', $value);
    }

    /**
     * Sets the blockChat property value. Indicates if sessions to block chat function. This setting is configurable by the admin. Default value is false.
     * @param bool|null $value Value to set for the blockChat property.
    */
    public function setBlockChat(?bool $value): void {
        $this->getBackingStore()->set('blockChat', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remoteAssistanceState property value. State of remote assistance for the account
     * @param RemoteAssistanceState|null $value Value to set for the remoteAssistanceState property.
    */
    public function setRemoteAssistanceState(?RemoteAssistanceState $value): void {
        $this->getBackingStore()->set('remoteAssistanceState', $value);
    }

}
