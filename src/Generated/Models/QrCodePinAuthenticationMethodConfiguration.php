<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class QrCodePinAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * Instantiates a new QrCodePinAuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.qrCodePinAuthenticationMethodConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QrCodePinAuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QrCodePinAuthenticationMethodConfiguration {
        return new QrCodePinAuthenticationMethodConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'includeTargets' => fn(ParseNode $n) => $o->setIncludeTargets($n->getCollectionOfObjectValues([AuthenticationMethodTarget::class, 'createFromDiscriminatorValue'])),
            'pinLength' => fn(ParseNode $n) => $o->setPinLength($n->getIntegerValue()),
            'standardQRCodeLifetimeInDays' => fn(ParseNode $n) => $o->setStandardQRCodeLifetimeInDays($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the includeTargets property value. A collection of groups that are enabled to use the authentication method.
     * @return array<AuthenticationMethodTarget>|null
    */
    public function getIncludeTargets(): ?array {
        $val = $this->getBackingStore()->get('includeTargets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationMethodTarget::class);
            /** @var array<AuthenticationMethodTarget>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeTargets'");
    }

    /**
     * Gets the pinLength property value. A memorized alphanumeric secret code. Minimum length is 8 as per NIST 800-63B and can't be longer than 20 digits.
     * @return int|null
    */
    public function getPinLength(): ?int {
        $val = $this->getBackingStore()->get('pinLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinLength'");
    }

    /**
     * Gets the standardQRCodeLifetimeInDays property value. The maximum value is 395 days and the default value is 365 days.
     * @return int|null
    */
    public function getStandardQRCodeLifetimeInDays(): ?int {
        $val = $this->getBackingStore()->get('standardQRCodeLifetimeInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'standardQRCodeLifetimeInDays'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('includeTargets', $this->getIncludeTargets());
        $writer->writeIntegerValue('pinLength', $this->getPinLength());
        $writer->writeIntegerValue('standardQRCodeLifetimeInDays', $this->getStandardQRCodeLifetimeInDays());
    }

    /**
     * Sets the includeTargets property value. A collection of groups that are enabled to use the authentication method.
     * @param array<AuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value): void {
        $this->getBackingStore()->set('includeTargets', $value);
    }

    /**
     * Sets the pinLength property value. A memorized alphanumeric secret code. Minimum length is 8 as per NIST 800-63B and can't be longer than 20 digits.
     * @param int|null $value Value to set for the pinLength property.
    */
    public function setPinLength(?int $value): void {
        $this->getBackingStore()->set('pinLength', $value);
    }

    /**
     * Sets the standardQRCodeLifetimeInDays property value. The maximum value is 395 days and the default value is 365 days.
     * @param int|null $value Value to set for the standardQRCodeLifetimeInDays property.
    */
    public function setStandardQRCodeLifetimeInDays(?int $value): void {
        $this->getBackingStore()->set('standardQRCodeLifetimeInDays', $value);
    }

}
