<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CustomClaimCondition extends CustomClaimConditionBase implements Parsable 
{
    /**
     * Instantiates a new CustomClaimCondition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customClaimCondition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomClaimCondition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomClaimCondition {
        return new CustomClaimCondition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'memberOf' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMemberOf($val);
            },
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(ClaimConditionUserType::class)),
        ]);
    }

    /**
     * Gets the memberOf property value. A list of groups (GUIDs) to which the user/application must be a member for this condition to be applied.
     * @return array<string>|null
    */
    public function getMemberOf(): ?array {
        $val = $this->getBackingStore()->get('memberOf');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberOf'");
    }

    /**
     * Gets the userType property value. The type of user this condition applies to. The possible values are: any, members, allGuests, aadGuests, externalGuests, unknownFutureValue.
     * @return ClaimConditionUserType|null
    */
    public function getUserType(): ?ClaimConditionUserType {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || $val instanceof ClaimConditionUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('memberOf', $this->getMemberOf());
        $writer->writeEnumValue('userType', $this->getUserType());
    }

    /**
     * Sets the memberOf property value. A list of groups (GUIDs) to which the user/application must be a member for this condition to be applied.
     * @param array<string>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value): void {
        $this->getBackingStore()->set('memberOf', $value);
    }

    /**
     * Sets the userType property value. The type of user this condition applies to. The possible values are: any, members, allGuests, aadGuests, externalGuests, unknownFutureValue.
     * @param ClaimConditionUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?ClaimConditionUserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
