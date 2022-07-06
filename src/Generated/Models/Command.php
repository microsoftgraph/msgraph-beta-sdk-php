<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Command extends Entity implements Parsable 
{
    /**
     * @var string|null $appServiceName The appServiceName property
    */
    private ?string $appServiceName = null;
    
    /**
     * @var string|null $error The error property
    */
    private ?string $error = null;
    
    /**
     * @var string|null $packageFamilyName The packageFamilyName property
    */
    private ?string $packageFamilyName = null;
    
    /**
     * @var PayloadRequest|null $payload The payload property
    */
    private ?PayloadRequest $payload = null;
    
    /**
     * @var string|null $permissionTicket The permissionTicket property
    */
    private ?string $permissionTicket = null;
    
    /**
     * @var string|null $postBackUri The postBackUri property
    */
    private ?string $postBackUri = null;
    
    /**
     * @var PayloadResponse|null $responsepayload The responsepayload property
    */
    private ?PayloadResponse $responsepayload = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new command and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Command
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Command {
        return new Command();
    }

    /**
     * Gets the appServiceName property value. The appServiceName property
     * @return string|null
    */
    public function getAppServiceName(): ?string {
        return $this->appServiceName;
    }

    /**
     * Gets the error property value. The error property
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appServiceName' => function (ParseNode $n) use ($o) { $o->setAppServiceName($n->getStringValue()); },
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getStringValue()); },
            'packageFamilyName' => function (ParseNode $n) use ($o) { $o->setPackageFamilyName($n->getStringValue()); },
            'payload' => function (ParseNode $n) use ($o) { $o->setPayload($n->getObjectValue(array(PayloadRequest::class, 'createFromDiscriminatorValue'))); },
            'permissionTicket' => function (ParseNode $n) use ($o) { $o->setPermissionTicket($n->getStringValue()); },
            'postBackUri' => function (ParseNode $n) use ($o) { $o->setPostBackUri($n->getStringValue()); },
            'responsepayload' => function (ParseNode $n) use ($o) { $o->setResponsepayload($n->getObjectValue(array(PayloadResponse::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the packageFamilyName property value. The packageFamilyName property
     * @return string|null
    */
    public function getPackageFamilyName(): ?string {
        return $this->packageFamilyName;
    }

    /**
     * Gets the payload property value. The payload property
     * @return PayloadRequest|null
    */
    public function getPayload(): ?PayloadRequest {
        return $this->payload;
    }

    /**
     * Gets the permissionTicket property value. The permissionTicket property
     * @return string|null
    */
    public function getPermissionTicket(): ?string {
        return $this->permissionTicket;
    }

    /**
     * Gets the postBackUri property value. The postBackUri property
     * @return string|null
    */
    public function getPostBackUri(): ?string {
        return $this->postBackUri;
    }

    /**
     * Gets the responsepayload property value. The responsepayload property
     * @return PayloadResponse|null
    */
    public function getResponsepayload(): ?PayloadResponse {
        return $this->responsepayload;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appServiceName', $this->appServiceName);
        $writer->writeStringValue('error', $this->error);
        $writer->writeStringValue('packageFamilyName', $this->packageFamilyName);
        $writer->writeObjectValue('payload', $this->payload);
        $writer->writeStringValue('permissionTicket', $this->permissionTicket);
        $writer->writeStringValue('postBackUri', $this->postBackUri);
        $writer->writeObjectValue('responsepayload', $this->responsepayload);
        $writer->writeStringValue('status', $this->status);
        $writer->writeStringValue('type', $this->type);
    }

    /**
     * Sets the appServiceName property value. The appServiceName property
     *  @param string|null $value Value to set for the appServiceName property.
    */
    public function setAppServiceName(?string $value ): void {
        $this->appServiceName = $value;
    }

    /**
     * Sets the error property value. The error property
     *  @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the packageFamilyName property value. The packageFamilyName property
     *  @param string|null $value Value to set for the packageFamilyName property.
    */
    public function setPackageFamilyName(?string $value ): void {
        $this->packageFamilyName = $value;
    }

    /**
     * Sets the payload property value. The payload property
     *  @param PayloadRequest|null $value Value to set for the payload property.
    */
    public function setPayload(?PayloadRequest $value ): void {
        $this->payload = $value;
    }

    /**
     * Sets the permissionTicket property value. The permissionTicket property
     *  @param string|null $value Value to set for the permissionTicket property.
    */
    public function setPermissionTicket(?string $value ): void {
        $this->permissionTicket = $value;
    }

    /**
     * Sets the postBackUri property value. The postBackUri property
     *  @param string|null $value Value to set for the postBackUri property.
    */
    public function setPostBackUri(?string $value ): void {
        $this->postBackUri = $value;
    }

    /**
     * Sets the responsepayload property value. The responsepayload property
     *  @param PayloadResponse|null $value Value to set for the responsepayload property.
    */
    public function setResponsepayload(?PayloadResponse $value ): void {
        $this->responsepayload = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
