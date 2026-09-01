<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SponsorPresenceRule extends LifecyclePolicyRule implements Parsable 
{
    /**
     * Instantiates a new SponsorPresenceRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.sponsorPresenceRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SponsorPresenceRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SponsorPresenceRule {
        return new SponsorPresenceRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'minimumSponsorCount' => fn(ParseNode $n) => $o->setMinimumSponsorCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the minimumSponsorCount property value. The minimumSponsorCount property
     * @return int|null
    */
    public function getMinimumSponsorCount(): ?int {
        $val = $this->getBackingStore()->get('minimumSponsorCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSponsorCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('minimumSponsorCount', $this->getMinimumSponsorCount());
    }

    /**
     * Sets the minimumSponsorCount property value. The minimumSponsorCount property
     * @param int|null $value Value to set for the minimumSponsorCount property.
    */
    public function setMinimumSponsorCount(?int $value): void {
        $this->getBackingStore()->set('minimumSponsorCount', $value);
    }

}
