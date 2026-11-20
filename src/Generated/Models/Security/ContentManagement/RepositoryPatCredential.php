<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Personal access token credential.
*/
class RepositoryPatCredential extends RepositoryAccessCredential implements Parsable 
{
    /**
     * Instantiates a new RepositoryPatCredential and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.contentManagement.repositoryPatCredential');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RepositoryPatCredential
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RepositoryPatCredential {
        return new RepositoryPatCredential();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
        ]);
    }

    /**
     * Gets the token property value. Personal access token.
     * @return string|null
    */
    public function getToken(): ?string {
        $val = $this->getBackingStore()->get('token');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'token'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('token', $this->getToken());
    }

    /**
     * Sets the token property value. Personal access token.
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->getBackingStore()->set('token', $value);
    }

}
