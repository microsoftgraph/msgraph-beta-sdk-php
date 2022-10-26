<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceInsight extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $insightCreatedDateTime Indicates when the insight was created.
    */
    private ?DateTime $insightCreatedDateTime = null;
    
    /**
     * Instantiates a new governanceInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.governanceInsight');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceInsight {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.membershipOutlierInsight': return new MembershipOutlierInsight();
                case '#microsoft.graph.userSignInInsight': return new UserSignInInsight();
            }
        }
        return new GovernanceInsight();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'insightCreatedDateTime' => fn(ParseNode $n) => $o->setInsightCreatedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the insightCreatedDateTime property value. Indicates when the insight was created.
     * @return DateTime|null
    */
    public function getInsightCreatedDateTime(): ?DateTime {
        return $this->insightCreatedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('insightCreatedDateTime', $this->insightCreatedDateTime);
    }

    /**
     * Sets the insightCreatedDateTime property value. Indicates when the insight was created.
     *  @param DateTime|null $value Value to set for the insightCreatedDateTime property.
    */
    public function setInsightCreatedDateTime(?DateTime $value ): void {
        $this->insightCreatedDateTime = $value;
    }

}
