<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcDomainJoinPlainTextUserIdentity extends CloudPcDomainJoinUserIdentity implements Parsable 
{
    /**
     * Instantiates a new CloudPcDomainJoinPlainTextUserIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcDomainJoinPlainTextUserIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDomainJoinPlainTextUserIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDomainJoinPlainTextUserIdentity {
        return new CloudPcDomainJoinPlainTextUserIdentity();
    }

    /**
     * Gets the domainUserPrincipalName property value. The user principal name of an Active Directory account that has sufficient permissions to join devices to the domain. The value must be in UPN format, for example, domainjoin@ad.contoso.com. Required.
     * @return string|null
    */
    public function getDomainUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('domainUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainUserPrincipalName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domainUserPrincipalName' => fn(ParseNode $n) => $o->setDomainUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('domainUserPrincipalName', $this->getDomainUserPrincipalName());
    }

    /**
     * Sets the domainUserPrincipalName property value. The user principal name of an Active Directory account that has sufficient permissions to join devices to the domain. The value must be in UPN format, for example, domainjoin@ad.contoso.com. Required.
     * @param string|null $value Value to set for the domainUserPrincipalName property.
    */
    public function setDomainUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('domainUserPrincipalName', $value);
    }

}
