<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NdesConnector extends Entity 
{
    /** @var string|null $displayName The friendly name of the Ndes Connector. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastConnectionDateTime Last connection time for the Ndes Connector */
    private ?DateTime $lastConnectionDateTime = null;
    
    /** @var NdesConnectorState|null $state Ndes Connector Status. Possible values are: none, active, inactive. */
    private ?NdesConnectorState $state = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): NdesConnector {
        return new NdesConnector();
    }

    /**
     * Gets the displayName property value. The friendly name of the Ndes Connector.
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
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastConnectionDateTime' => function (self $o, ParseNode $n) { $o->setLastConnectionDateTime($n->getDateTimeValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(NdesConnectorState::class)); },
        ]);
    }

    /**
     * Gets the lastConnectionDateTime property value. Last connection time for the Ndes Connector
     * @return DateTime|null
    */
    public function getLastConnectionDateTime(): ?DateTime {
        return $this->lastConnectionDateTime;
    }

    /**
     * Gets the state property value. Ndes Connector Status. Possible values are: none, active, inactive.
     * @return NdesConnectorState|null
    */
    public function getState(): ?NdesConnectorState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastConnectionDateTime', $this->lastConnectionDateTime);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the displayName property value. The friendly name of the Ndes Connector.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastConnectionDateTime property value. Last connection time for the Ndes Connector
     *  @param DateTime|null $value Value to set for the lastConnectionDateTime property.
    */
    public function setLastConnectionDateTime(?DateTime $value ): void {
        $this->lastConnectionDateTime = $value;
    }

    /**
     * Sets the state property value. Ndes Connector Status. Possible values are: none, active, inactive.
     *  @param NdesConnectorState|null $value Value to set for the state property.
    */
    public function setState(?NdesConnectorState $value ): void {
        $this->state = $value;
    }

}
