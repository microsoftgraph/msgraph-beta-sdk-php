<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\AuthenticationMethods\UserSignInsByAuthMethodSummaryWithPeriod;

use Microsoft\\Graph\\Beta\\Generated\Models\BaseCollectionPaginationCountResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\UserSignInUsageByAuthMethodActivity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserSignInsByAuthMethodSummaryWithPeriodGetResponse extends BaseCollectionPaginationCountResponse implements Parsable 
{
    /**
     * Instantiates a new UserSignInsByAuthMethodSummaryWithPeriodGetResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSignInsByAuthMethodSummaryWithPeriodGetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSignInsByAuthMethodSummaryWithPeriodGetResponse {
        return new UserSignInsByAuthMethodSummaryWithPeriodGetResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getCollectionOfObjectValues([UserSignInUsageByAuthMethodActivity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return array<UserSignInUsageByAuthMethodActivity>|null
    */
    public function getValue(): ?array {
        $val = $this->getBackingStore()->get('value');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserSignInUsageByAuthMethodActivity::class);
            /** @var array<UserSignInUsageByAuthMethodActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('value', $this->getValue());
    }

    /**
     * Sets the value property value. The value property
     * @param array<UserSignInUsageByAuthMethodActivity>|null $value Value to set for the value property.
    */
    public function setValue(?array $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
