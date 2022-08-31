<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalActivity extends Entity implements Parsable 
{
    /**
     * @var Identity|null $performedBy Represents an identity used to identify who is responsible for the activity.
    */
    private ?Identity $performedBy = null;
    
    /**
     * @var DateTime|null $startDateTime When the particular activity occurred.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var ExternalActivityType|null $type The type property
    */
    private ?ExternalActivityType $type = null;
    
    /**
     * Instantiates a new externalActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalConnectors.externalActivity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalActivity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.externalConnectors.externalActivityResult': return new ExternalActivityResult();
            }
        }
        return new ExternalActivity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'performedBy' => function (ParseNode $n) use ($o) { $o->setPerformedBy($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(ExternalActivityType::class)); },
        ]);
    }

    /**
     * Gets the performedBy property value. Represents an identity used to identify who is responsible for the activity.
     * @return Identity|null
    */
    public function getPerformedBy(): ?Identity {
        return $this->performedBy;
    }

    /**
     * Gets the startDateTime property value. When the particular activity occurred.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the type property value. The type property
     * @return ExternalActivityType|null
    */
    public function getType(): ?ExternalActivityType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('performedBy', $this->performedBy);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('type', $this->type);
    }

    /**
     * Sets the performedBy property value. Represents an identity used to identify who is responsible for the activity.
     *  @param Identity|null $value Value to set for the performedBy property.
    */
    public function setPerformedBy(?Identity $value ): void {
        $this->performedBy = $value;
    }

    /**
     * Sets the startDateTime property value. When the particular activity occurred.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param ExternalActivityType|null $value Value to set for the type property.
    */
    public function setType(?ExternalActivityType $value ): void {
        $this->type = $value;
    }

}
