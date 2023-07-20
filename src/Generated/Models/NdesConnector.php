<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity which represents an OnPrem Ndes connector.
*/
class NdesConnector extends Entity implements Parsable 
{
    /**
     * Instantiates a new ndesConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NdesConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NdesConnector {
        return new NdesConnector();
    }

    /**
     * Gets the connectorVersion property value. The build version of the Ndes Connector.
     * @return string|null
    */
    public function getConnectorVersion(): ?string {
        $val = $this->getBackingStore()->get('connectorVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectorVersion'");
    }

    /**
     * Gets the displayName property value. The friendly name of the Ndes Connector.
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
     * Gets the enrolledDateTime property value. Timestamp when on-prem certificate connector was enrolled in Intune.
     * @return DateTime|null
    */
    public function getEnrolledDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('enrolledDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrolledDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectorVersion' => fn(ParseNode $n) => $o->setConnectorVersion($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enrolledDateTime' => fn(ParseNode $n) => $o->setEnrolledDateTime($n->getDateTimeValue()),
            'lastConnectionDateTime' => fn(ParseNode $n) => $o->setLastConnectionDateTime($n->getDateTimeValue()),
            'machineName' => fn(ParseNode $n) => $o->setMachineName($n->getStringValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(NdesConnectorState::class)),
        ]);
    }

    /**
     * Gets the lastConnectionDateTime property value. Last connection time for the Ndes Connector
     * @return DateTime|null
    */
    public function getLastConnectionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastConnectionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastConnectionDateTime'");
    }

    /**
     * Gets the machineName property value. Name of the machine running on-prem certificate connector service.
     * @return string|null
    */
    public function getMachineName(): ?string {
        $val = $this->getBackingStore()->get('machineName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'machineName'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
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
     * Gets the state property value. The current status of the Ndes Connector.
     * @return NdesConnectorState|null
    */
    public function getState(): ?NdesConnectorState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof NdesConnectorState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('connectorVersion', $this->getConnectorVersion());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('enrolledDateTime', $this->getEnrolledDateTime());
        $writer->writeDateTimeValue('lastConnectionDateTime', $this->getLastConnectionDateTime());
        $writer->writeStringValue('machineName', $this->getMachineName());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the connectorVersion property value. The build version of the Ndes Connector.
     * @param string|null $value Value to set for the connectorVersion property.
    */
    public function setConnectorVersion(?string $value): void {
        $this->getBackingStore()->set('connectorVersion', $value);
    }

    /**
     * Sets the displayName property value. The friendly name of the Ndes Connector.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enrolledDateTime property value. Timestamp when on-prem certificate connector was enrolled in Intune.
     * @param DateTime|null $value Value to set for the enrolledDateTime property.
    */
    public function setEnrolledDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('enrolledDateTime', $value);
    }

    /**
     * Sets the lastConnectionDateTime property value. Last connection time for the Ndes Connector
     * @param DateTime|null $value Value to set for the lastConnectionDateTime property.
    */
    public function setLastConnectionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastConnectionDateTime', $value);
    }

    /**
     * Sets the machineName property value. Name of the machine running on-prem certificate connector service.
     * @param string|null $value Value to set for the machineName property.
    */
    public function setMachineName(?string $value): void {
        $this->getBackingStore()->set('machineName', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the state property value. The current status of the Ndes Connector.
     * @param NdesConnectorState|null $value Value to set for the state property.
    */
    public function setState(?NdesConnectorState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
