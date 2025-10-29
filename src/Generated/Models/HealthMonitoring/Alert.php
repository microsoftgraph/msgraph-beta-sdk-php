<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\HealthMonitoring;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Alert extends Entity implements Parsable 
{
    /**
     * Instantiates a new Alert and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Alert
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Alert {
        return new Alert();
    }

    /**
     * Gets the alertType property value. The alertType property
     * @return AlertType|null
    */
    public function getAlertType(): ?AlertType {
        $val = $this->getBackingStore()->get('alertType');
        if (is_null($val) || $val instanceof AlertType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertType'");
    }

    /**
     * Gets the category property value. The category property
     * @return Category|null
    */
    public function getCategory(): ?Category {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof Category) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the createdDateTime property value. The time when Microsoft Entra Health monitoring generated the alert. Supports $orderby.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the documentation property value. A key-value pair that contains the name of and link to the documentation to aid in investigation of the alert.
     * @return Documentation|null
    */
    public function getDocumentation(): ?Documentation {
        $val = $this->getBackingStore()->get('documentation');
        if (is_null($val) || $val instanceof Documentation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentation'");
    }

    /**
     * Gets the enrichment property value. Investigative information on the alert. This information typically includes counts of impacted objects, which include directory objects such as users, groups, and devices, and a pointer to supporting data.
     * @return Enrichment|null
    */
    public function getEnrichment(): ?Enrichment {
        $val = $this->getBackingStore()->get('enrichment');
        if (is_null($val) || $val instanceof Enrichment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrichment'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertType' => fn(ParseNode $n) => $o->setAlertType($n->getEnumValue(AlertType::class)),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(Category::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'documentation' => fn(ParseNode $n) => $o->setDocumentation($n->getObjectValue([Documentation::class, 'createFromDiscriminatorValue'])),
            'enrichment' => fn(ParseNode $n) => $o->setEnrichment($n->getObjectValue([Enrichment::class, 'createFromDiscriminatorValue'])),
            'scenario' => fn(ParseNode $n) => $o->setScenario($n->getEnumValue(Scenario::class)),
            'signals' => fn(ParseNode $n) => $o->setSignals($n->getObjectValue([Signals::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AlertState::class)),
        ]);
    }

    /**
     * Gets the scenario property value. The scenario property
     * @return Scenario|null
    */
    public function getScenario(): ?Scenario {
        $val = $this->getBackingStore()->get('scenario');
        if (is_null($val) || $val instanceof Scenario) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scenario'");
    }

    /**
     * Gets the signals property value. The collection of signals that were used in the generation of the alert. These signals are sourced from serviceActivity APIs and are added to the alert as key-value pairs.
     * @return Signals|null
    */
    public function getSignals(): ?Signals {
        $val = $this->getBackingStore()->get('signals');
        if (is_null($val) || $val instanceof Signals) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signals'");
    }

    /**
     * Gets the state property value. The state property
     * @return AlertState|null
    */
    public function getState(): ?AlertState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof AlertState) {
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
        $writer->writeEnumValue('alertType', $this->getAlertType());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('documentation', $this->getDocumentation());
        $writer->writeObjectValue('enrichment', $this->getEnrichment());
        $writer->writeEnumValue('scenario', $this->getScenario());
        $writer->writeObjectValue('signals', $this->getSignals());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the alertType property value. The alertType property
     * @param AlertType|null $value Value to set for the alertType property.
    */
    public function setAlertType(?AlertType $value): void {
        $this->getBackingStore()->set('alertType', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param Category|null $value Value to set for the category property.
    */
    public function setCategory(?Category $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the createdDateTime property value. The time when Microsoft Entra Health monitoring generated the alert. Supports $orderby.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the documentation property value. A key-value pair that contains the name of and link to the documentation to aid in investigation of the alert.
     * @param Documentation|null $value Value to set for the documentation property.
    */
    public function setDocumentation(?Documentation $value): void {
        $this->getBackingStore()->set('documentation', $value);
    }

    /**
     * Sets the enrichment property value. Investigative information on the alert. This information typically includes counts of impacted objects, which include directory objects such as users, groups, and devices, and a pointer to supporting data.
     * @param Enrichment|null $value Value to set for the enrichment property.
    */
    public function setEnrichment(?Enrichment $value): void {
        $this->getBackingStore()->set('enrichment', $value);
    }

    /**
     * Sets the scenario property value. The scenario property
     * @param Scenario|null $value Value to set for the scenario property.
    */
    public function setScenario(?Scenario $value): void {
        $this->getBackingStore()->set('scenario', $value);
    }

    /**
     * Sets the signals property value. The collection of signals that were used in the generation of the alert. These signals are sourced from serviceActivity APIs and are added to the alert as key-value pairs.
     * @param Signals|null $value Value to set for the signals property.
    */
    public function setSignals(?Signals $value): void {
        $this->getBackingStore()->set('signals', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param AlertState|null $value Value to set for the state property.
    */
    public function setState(?AlertState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
