<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DecisionItemPrincipalResourceMembership implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DecisionItemPrincipalResourceMembershipType|null $membershipType Type of membership that the principal has to the resource. Multi-valued. The possible values are: direct, indirect, unknownFutureValue.
    */
    private ?DecisionItemPrincipalResourceMembershipType $membershipType = null;
    
    /**
     * Instantiates a new decisionItemPrincipalResourceMembership and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DecisionItemPrincipalResourceMembership
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DecisionItemPrincipalResourceMembership {
        return new DecisionItemPrincipalResourceMembership();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'membershipType' => function (ParseNode $n) use ($o) { $o->setMembershipType($n->getEnumValue(DecisionItemPrincipalResourceMembershipType::class)); },
        ];
    }

    /**
     * Gets the membershipType property value. Type of membership that the principal has to the resource. Multi-valued. The possible values are: direct, indirect, unknownFutureValue.
     * @return DecisionItemPrincipalResourceMembershipType|null
    */
    public function getMembershipType(): ?DecisionItemPrincipalResourceMembershipType {
        return $this->membershipType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('membershipType', $this->membershipType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the membershipType property value. Type of membership that the principal has to the resource. Multi-valued. The possible values are: direct, indirect, unknownFutureValue.
     *  @param DecisionItemPrincipalResourceMembershipType|null $value Value to set for the membershipType property.
    */
    public function setMembershipType(?DecisionItemPrincipalResourceMembershipType $value ): void {
        $this->membershipType = $value;
    }

}
