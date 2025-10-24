<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CustomClaimsPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomClaimsPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomClaimsPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomClaimsPolicy {
        return new CustomClaimsPolicy();
    }

    /**
     * Gets the audienceOverride property value. If specified, it overrides the content of the audience claim for WS-Federation and SAML2 protocols. A custom signing key must be used for audienceOverride to be applied, otherwise, the audienceOverride value is ignored. The value provided must be in the format of an absolute URI.
     * @return string|null
    */
    public function getAudienceOverride(): ?string {
        $val = $this->getBackingStore()->get('audienceOverride');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audienceOverride'");
    }

    /**
     * Gets the claims property value. Defines which claims are present in the tokens affected by the policy, in addition to the basic claim and the core claim set. Inherited from customclaimbase.
     * @return array<CustomClaimBase>|null
    */
    public function getClaims(): ?array {
        $val = $this->getBackingStore()->get('claims');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomClaimBase::class);
            /** @var array<CustomClaimBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'claims'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audienceOverride' => fn(ParseNode $n) => $o->setAudienceOverride($n->getStringValue()),
            'claims' => fn(ParseNode $n) => $o->setClaims($n->getCollectionOfObjectValues([CustomClaimBase::class, 'createFromDiscriminatorValue'])),
            'includeApplicationIdInIssuer' => fn(ParseNode $n) => $o->setIncludeApplicationIdInIssuer($n->getBooleanValue()),
            'includeBasicClaimSet' => fn(ParseNode $n) => $o->setIncludeBasicClaimSet($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the includeApplicationIdInIssuer property value. Indicates whether the application ID is added to the claim. It is relevant only for SAML2.0 and if a custom signing key is used. the default value is true. Optional.
     * @return bool|null
    */
    public function getIncludeApplicationIdInIssuer(): ?bool {
        $val = $this->getBackingStore()->get('includeApplicationIdInIssuer');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeApplicationIdInIssuer'");
    }

    /**
     * Gets the includeBasicClaimSet property value. Determines whether the basic claim set is included in tokens affected by this policy. If set to true, all claims in the basic claim set are emitted in tokens affected by the policy. By default the basic claim set isn't in the tokens unless they're explicitly configured in this policy.
     * @return bool|null
    */
    public function getIncludeBasicClaimSet(): ?bool {
        $val = $this->getBackingStore()->get('includeBasicClaimSet');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeBasicClaimSet'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('audienceOverride', $this->getAudienceOverride());
        $writer->writeCollectionOfObjectValues('claims', $this->getClaims());
        $writer->writeBooleanValue('includeApplicationIdInIssuer', $this->getIncludeApplicationIdInIssuer());
        $writer->writeBooleanValue('includeBasicClaimSet', $this->getIncludeBasicClaimSet());
    }

    /**
     * Sets the audienceOverride property value. If specified, it overrides the content of the audience claim for WS-Federation and SAML2 protocols. A custom signing key must be used for audienceOverride to be applied, otherwise, the audienceOverride value is ignored. The value provided must be in the format of an absolute URI.
     * @param string|null $value Value to set for the audienceOverride property.
    */
    public function setAudienceOverride(?string $value): void {
        $this->getBackingStore()->set('audienceOverride', $value);
    }

    /**
     * Sets the claims property value. Defines which claims are present in the tokens affected by the policy, in addition to the basic claim and the core claim set. Inherited from customclaimbase.
     * @param array<CustomClaimBase>|null $value Value to set for the claims property.
    */
    public function setClaims(?array $value): void {
        $this->getBackingStore()->set('claims', $value);
    }

    /**
     * Sets the includeApplicationIdInIssuer property value. Indicates whether the application ID is added to the claim. It is relevant only for SAML2.0 and if a custom signing key is used. the default value is true. Optional.
     * @param bool|null $value Value to set for the includeApplicationIdInIssuer property.
    */
    public function setIncludeApplicationIdInIssuer(?bool $value): void {
        $this->getBackingStore()->set('includeApplicationIdInIssuer', $value);
    }

    /**
     * Sets the includeBasicClaimSet property value. Determines whether the basic claim set is included in tokens affected by this policy. If set to true, all claims in the basic claim set are emitted in tokens affected by the policy. By default the basic claim set isn't in the tokens unless they're explicitly configured in this policy.
     * @param bool|null $value Value to set for the includeBasicClaimSet property.
    */
    public function setIncludeBasicClaimSet(?bool $value): void {
        $this->getBackingStore()->set('includeBasicClaimSet', $value);
    }

}
