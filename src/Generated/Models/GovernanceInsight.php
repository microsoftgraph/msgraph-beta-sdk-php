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
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new governanceInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
            'insightCreatedDateTime' => function (ParseNode $n) use ($o) { $o->setInsightCreatedDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
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
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('insightCreatedDateTime', $this->insightCreatedDateTime);
        $writer->writeStringValue('@odata.type', $this->type);
    }

    /**
     * Sets the insightCreatedDateTime property value. Indicates when the insight was created.
     *  @param DateTime|null $value Value to set for the insightCreatedDateTime property.
    */
    public function setInsightCreatedDateTime(?DateTime $value ): void {
        $this->insightCreatedDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

}
