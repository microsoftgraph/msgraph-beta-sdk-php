<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppConsentApprovalRoute extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AppConsentRequest>|null $appConsentRequests A collection of userConsentRequest objects for a specific application.
    */
    private ?array $appConsentRequests = null;
    
    /**
     * Instantiates a new AppConsentApprovalRoute and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppConsentApprovalRoute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppConsentApprovalRoute {
        return new AppConsentApprovalRoute();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appConsentRequests property value. A collection of userConsentRequest objects for a specific application.
     * @return array<AppConsentRequest>|null
    */
    public function getAppConsentRequests(): ?array {
        return $this->appConsentRequests;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appConsentRequests' => function (ParseNode $n) use ($o) { $o->setAppConsentRequests($n->getCollectionOfObjectValues(array(AppConsentRequest::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appConsentRequests', $this->appConsentRequests);
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
     * Sets the appConsentRequests property value. A collection of userConsentRequest objects for a specific application.
     *  @param array<AppConsentRequest>|null $value Value to set for the appConsentRequests property.
    */
    public function setAppConsentRequests(?array $value ): void {
        $this->appConsentRequests = $value;
    }

}
