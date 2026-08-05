<?php

namespace Microsoft\Graph\Beta\Generated\Models\TenantGovernanceServices;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class B2BSignInActivityMetrics extends Entity implements Parsable 
{
    /**
     * Instantiates a new B2BSignInActivityMetrics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return B2BSignInActivityMetrics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): B2BSignInActivityMetrics {
        return new B2BSignInActivityMetrics();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initial' => fn(ParseNode $n) => $o->setInitial($n->getObjectValue([B2BSignInActivityMetricsInitial::class, 'createFromDiscriminatorValue'])),
            'investigationHints' => fn(ParseNode $n) => $o->setInvestigationHints($n->getCollectionOfObjectValues([ActionStep::class, 'createFromDiscriminatorValue'])),
            'recent' => fn(ParseNode $n) => $o->setRecent($n->getObjectValue([B2BSignInActivityMetricsRecent::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the initial property value. The initial property
     * @return B2BSignInActivityMetricsInitial|null
    */
    public function getInitial(): ?B2BSignInActivityMetricsInitial {
        $val = $this->getBackingStore()->get('initial');
        if (is_null($val) || $val instanceof B2BSignInActivityMetricsInitial) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initial'");
    }

    /**
     * Gets the investigationHints property value. Ordered drill-in guidance for investigating sign-in user and application counts. This collection is returned only when explicitly requested by using a nested $expand query parameter, for example $expand=b2BSignInActivityMetrics($expand=investigationHints).
     * @return array<ActionStep>|null
    */
    public function getInvestigationHints(): ?array {
        $val = $this->getBackingStore()->get('investigationHints');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ActionStep::class);
            /** @var array<ActionStep>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'investigationHints'");
    }

    /**
     * Gets the recent property value. The recent property
     * @return B2BSignInActivityMetricsRecent|null
    */
    public function getRecent(): ?B2BSignInActivityMetricsRecent {
        $val = $this->getBackingStore()->get('recent');
        if (is_null($val) || $val instanceof B2BSignInActivityMetricsRecent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initial', $this->getInitial());
        $writer->writeCollectionOfObjectValues('investigationHints', $this->getInvestigationHints());
        $writer->writeObjectValue('recent', $this->getRecent());
    }

    /**
     * Sets the initial property value. The initial property
     * @param B2BSignInActivityMetricsInitial|null $value Value to set for the initial property.
    */
    public function setInitial(?B2BSignInActivityMetricsInitial $value): void {
        $this->getBackingStore()->set('initial', $value);
    }

    /**
     * Sets the investigationHints property value. Ordered drill-in guidance for investigating sign-in user and application counts. This collection is returned only when explicitly requested by using a nested $expand query parameter, for example $expand=b2BSignInActivityMetrics($expand=investigationHints).
     * @param array<ActionStep>|null $value Value to set for the investigationHints property.
    */
    public function setInvestigationHints(?array $value): void {
        $this->getBackingStore()->set('investigationHints', $value);
    }

    /**
     * Sets the recent property value. The recent property
     * @param B2BSignInActivityMetricsRecent|null $value Value to set for the recent property.
    */
    public function setRecent(?B2BSignInActivityMetricsRecent $value): void {
        $this->getBackingStore()->set('recent', $value);
    }

}
